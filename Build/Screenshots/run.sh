#!/usr/bin/env bash
#
# Sets up a TYPO3 instance from .Build with SQLite, creates the example
# records and takes the screenshots. Called by Build/Scripts/runTests.sh,
# which provides the container commands:
#
#   PHP_RUN        runs a command in the PHP container
#   WEB_START      starts the PHP web server container in the background
#   WEB_STOP       stops it again
#   BROWSER_RUN    runs a command in the Playwright container next to it
#
set -e

rm -rf config var .Build/public/fileadmin .Build/public/typo3temp
${PHP_RUN} .Build/bin/typo3 setup --no-interaction --force \
    --driver=sqlite \
    --admin-username=admin --admin-user-password='Screenshots-2026!' \
    --admin-email=admin@example.org \
    --project-name='TCA Reference' \
    --create-site='http://localhost:8080/' \
    --server-type=other
${PHP_RUN} .Build/bin/typo3 extension:setup
# Shows the field names in brackets next to the labels
${PHP_RUN} .Build/bin/typo3 configuration:set BE/debug 1
# The PHP web server provides no SERVER_NAME to compare the host with
${PHP_RUN} .Build/bin/typo3 configuration:set SYS/trustedHostsPattern '.*'
${PHP_RUN} php Build/Screenshots/create-records.php

${WEB_START}
trap '${WEB_STOP}' EXIT
# Playwright is installed once, so later runs work without the network
${BROWSER_RUN} sh -c "( [ -d node_modules/playwright ] || npm ci --no-audit --no-fund ) && node screenshots.mjs $*"
