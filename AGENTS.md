# AGENTS.md — TYPO3 TCA Reference

## Repo structure

```
Documentation/                   # the actual manual (reST source, published to docs.typo3.org)
CONTRIBUTING.md                  # how to contribute
```

## Commands

- `make docs` — render the manual locally with Docker
- `make test-docs` — render in minimal-test mode (the same validation CI runs); use this to validate any change before committing
- `make test` — full test suite (`test-docs`, `test-lint`, `test-cgl`,
  `test-extension`)
- `make test-extension` — install the example extension in
  `Documentation/CodeSnippets/my_extension/` and check it with functional tests
- `make screenshots` — set up a TYPO3 instance with the example extension and
  its records, and take the screenshots into `Documentation/Images/Conference/`;
  `Build/Scripts/runTests.sh -s screenshots CtrlRecordList` takes only the
  named ones. Run it on each branch, so the screenshots show that version

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
6. **Link TYPO3 documentation with permalinks**, also inside this manual,
   and give every link its own link text; see
   `Documentation/Reference/ReStructuredText/Links/Documentation.rst` in the
   how-to-document guide. Do not suggest replacing a permalink with
   `:ref:`. A changelog entry is the exception: link it with the
   `:changelog:` option (see Version directives).
7. **Validate before committing** — run `make test-docs`.
8. **Never commit or push without being asked.**

## Which role for a TCA key

This manual names TCA keys on nearly every page, so it is worth stating: a
key is not PHP. Write it in plain backticks.

```rst
The `foreign_table` key points at the table, and `nullable` decides whether
an empty value is stored as :php:`null`.
```

The `:php:` role is not decoration — it renders an info button whose modal
tells the reader "Code written in PHP, dynamic server-side scripting
language". That is wrong next to `ctrl` or `MM_opposite_field`, and 260 of
them made the pages noisy for nothing.

| What it is | How to write it |
| --- | --- |
| TCA key or keyword (`ctrl`, `foreign_table`, `select`) | plain backticks |
| Database table or column (`tt_content`, `CType`) | plain backticks |
| A bare number or quoted string (`0`, `"hex"`) | plain backticks |
| Actual SQL (`WHERE`, `NULL`, `varchar`, `ORDER BY`) | `:sql:` |
| PHP class, variable, array fragment, `true`, `int` | `:php:` |
| An HTML element or attribute (`<input>`, `autocomplete="on"`) | `:html:` |
| A file path | `:file:` |

Do not use `:code:`. It renders exactly like plain backticks — same element,
no info button — so it only hides whether anyone thought about the question.

A role is only right where its modal says something true. `:sql:` announces
"Code written in SQL", which fits a keyword or a column type but not the name
of a table — a table name is an identifier, like a TCA key.

## Documenting a TCA option with confval

Every TCA option is a `confval` directive, and its fields follow one
pattern across the whole manual:

```rst
..  confval:: foreign_table
    :name: select-single-foreign-table
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['foreign_table']
    :type: string (table name)
    :Scope: Display / Proc.
    :RenderType: all

    The item-array will be filled with records from the table defined here.
```

| Field | Rule |
| --- | --- |
| `:name:` | Every confval has one. A new name is prefixed with its context (`select-single-`, `group-`, `ctrl-`). Never change an existing name: it is the published anchor. |
| `:TCA path:` | The full path, including the option's own key. Plain text, no `:php:`. Use `$table`, `$field`, `$type` and `$palette` as placeholders. |
| `:type:`, `:default:`, `:required:` | Lowercase. These are the directive's own options, and it matches them case-sensitively: `:Default:` renders as an unrelated extra field. |
| `:Scope:` | Only the scopes the introduction defines: `Display`, `Proc.`, `Display / Proc.`, `Database`, `Search`, `Special`. Where the option lives, such as `fieldControl`, is the path, not a scope. |
| `:Examples:` | Plural, and `:ref:` links to the example sections. |

The options follow the directive line directly. A blank line ends them, and
every option after it renders as body text, silently. On the rendered page
such a field shows up as a list inside the description instead of next to
the other fields.

Field names are case-sensitive and a space is part of the name, so
`:TCA Path:` or `:tca-path:` becomes a field of its own without any
warning. A `confval-menu` column has to use the same spelling as the field.

An existing confval without a `:name:` gets its own title as name, which
is the anchor it was published under. A prefixed name would break links.

## Version directives

`versionadded`, `versionchanged` and `deprecated` are removed one or two
versions after the change. Whatever came to stay belongs in the flowing
text, written without reference to the old behavior. The directive holds
the link to the changelog and, at most, what only matters during the
upgrade:

```rst
..  versionchanged:: 15.0
    :changelog: important-110501-1787666881

    Slugs of existing pages only change when they are generated anew.

The `pages` table replaces a slash in the page title with `-`.
```

Link the changelog with the `:changelog:` option and the entry's
identifier, not with a hand-written permalink. The option resolves against
the changelog inventory, so a wrong identifier warns during rendering
instead of leading to a 404, and the entry's title becomes the link text.

Read the new text once as if the directive were already gone. Words such
as "now", "no longer" or "instead of the previous" do not survive that.

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
