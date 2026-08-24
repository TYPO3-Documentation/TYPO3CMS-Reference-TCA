# AGENTS.md — TYPO3 TCA Reference

## Repo structure

```
Documentation/                   # the actual manual (reST source, published to docs.typo3.org)
CONTRIBUTING.md                  # how to contribute
```

## Commands

- `make docs` — render the manual locally with Docker
- `make test-docs` — render in fail-on-log mode; use this to validate any change before committing
- `make test` — full test suite (`test-lint`, `test-cgl`, `test-docs`)

## Documentation writing rules

Follow the official TYPO3 documentation writing conventions (see
https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument):

1. **reST, not Markdown** — everything under `Documentation/` is reStructuredText.
2. **Sentence case headlines** — first word and proper nouns only; see
   `Documentation/Advanced/ContentStyleGuide.rst` in the how-to-document guide.
3. **4-space indentation** for directive bodies, 2 spaces after `..` markers;
   see `Documentation/Advanced/CodingGuidelines.rst` in the how-to-document guide.
4. **Single backticks over double**, unless the content needs a literal
   backtick; see `Documentation/Reference/ReStructuredText/Code/InlineCode.rst`
   in the how-to-document guide.
5. **Every headline needs a `..  _anchor:` target** directly above it, and
   anchors are never removed once published; see
   `Documentation/Reference/ReStructuredText/Links/Anchors.rst` in the
   how-to-document guide.
6. **Validate before committing** — run `make test-docs`.
7. **Never commit or push without being asked.**

## Commit message format

Follow https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/EditLocal.html:

- Prefix the subject line with `[TASK]`, `[BUGFIX]`, or `[FEATURE]`,
  followed by a short, imperative summary.
- Explain *why* the change is needed in the body — the diff already shows
  what changed.
- End with a `Signed-off-by: Your Name <email>` trailer.
- If AI assistance went beyond basic spelling/grammar checks, add an
  `Assisted-by: <tool/model name> <contact>` trailer, e.g.
  `Assisted-by: Claude Sonnet 5 <noreply@anthropic.com>`.
- If the change should be backported, add a `Releases: main, 14.3, 13.4`
  trailer listing every branch it applies to. This repo maintains multiple
  LTS branches, so `Releases:` applies here — including for changes to
  these agent instruction files themselves, since agents may be working
  on an older branch where a change is still relevant.

## Pull requests

- When a commit is the only commit in the PR, the PR title and body must
  match the commit's subject and body exactly.
- When the commit message has a `Releases:` trailer naming branches beyond
  `main`, attach the matching `backport <version>` label (e.g.
  `backport 14.3`, `backport 13.4`) to the PR for each of those branches
  when opening it — don't wait to be asked.
- Adding labels requires triage/write access, which an external
  contributor's account (e.g. a fork-based PR) usually doesn't have. If
  attaching a label fails for that reason, don't treat it as an error and
  don't note the failure in the PR — just skip it silently.

## For maintainers

- A PR opened by an agent may be missing its `backport <version>` labels
  if the agent's account lacked permission to add them. Check for and add
  any missing backport labels yourself before/when merging such a PR.

## References

- [TYPO3CMS-Guide-HowToDocument](https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument) — official writing style guide and reST reference
- https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/EditLocal.html — commit/PR conventions
