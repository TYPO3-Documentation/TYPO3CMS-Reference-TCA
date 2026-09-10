.PHONY: help
help: ## Displays this list of targets with descriptions
	@echo "The following commands are available:\n"
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: docs
docs: ## Generate projects documentation (from "Documentation" directory)
	mkdir -p Documentation-GENERATED-temp
	docker run --user $(shell id -u):$(shell id -g) --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=Documentation

.PHONY: test-docs
test-docs: ## Test the documentation rendering
	mkdir -p Documentation-GENERATED-temp
	docker run --user $(shell id -u):$(shell id -g) --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=Documentation --no-progress --minimal-test

.PHONY: test
test: test-docs test-lint test-cgl ## Run all test suites

.PHONY: test-lint
test-lint: ## Lint the included PHP files
	Build/Scripts/runTests.sh -s lint

.PHONY: test-cgl
test-cgl: ## Check the TYPO3 coding guidelines (dry-run)
	Build/Scripts/runTests.sh -s cgl -n

.PHONY: fix
fix: fix-cgl ## Apply all automatic fixes

.PHONY: fix-cgl
fix-cgl: ## Fix TYPO3 coding guidelines violations
	Build/Scripts/runTests.sh -s cgl

.PHONY: install
install: ## Install/update the Composer dependencies
	Build/Scripts/runTests.sh -s composerUpdate

.PHONY: codesnippets
codesnippets: ## Regenerate automatic code snippets
	.Build/bin/typo3 codesnippet:create Documentation/
