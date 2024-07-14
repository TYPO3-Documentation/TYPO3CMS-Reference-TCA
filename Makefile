.PHONY: help
help: ## Displays this list of targets with descriptions
	@echo "The following commands are available:\n"
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: docs
docs: ## Generate projects documentation (from "Documentation" directory)
	mkdir -p Documentation-GENERATED-temp

	docker run --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=Documentation

.PHONY: test-docs
test-docs: ## Test the documentation rendering
	mkdir -p Documentation-GENERATED-temp

	docker run --rm --pull always -v "$(shell pwd)":/project -t ghcr.io/typo3-documentation/render-guides:latest --config=Documentation --no-progress --fail-on-log

.PHONY: codesnippets
codesnippets: ## Regenerate automatic code snippets
	.Build/bin/typo3 codesnippet:create Documentation/

.PHONY: test
test: test-lint test-cgl test-docs ## Runs all test suites

.PHONY: test-lint
test-lint: ## Lint PHP includes
	Build/Scripts/runTests.sh -s lint

.PHONY: test-cgl
test-cgl: ## Test coding guidelines to PHP includes
	Build/Scripts/runTests.sh -n -s cgl

.PHONY: fix
fix: fix-cgl## Apply automatic fixes

.PHONY: fix-cgl
fix-cgl: ## Apply coding guidelines to PHP includes
	Build/Scripts/runTests.sh -s cgl

.PHONY: install
install: ## Update composer
	Build/Scripts/runTests.sh -s composerUpdate
