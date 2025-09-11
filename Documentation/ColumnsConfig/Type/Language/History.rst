..  include:: /Includes.rst.txt

..  _columns-languge-history:
..  _columns-language-history:

=======
History
=======

A new TCA field type called `language` was added to TYPO3 Core with v11.2.
Its main purpose is to simplify the TCA language configuration. It therefore
supersedes the `special=languages` option of TCA columns with `type=select` as
well as the now mis-use of the `foreign_table` option, being set to
`sys_language`.

Since the introduction of site configurations and the corresponding site
languages back in v9, the `sys_language` table was not longer the only source
of truth regarding available languages. Actually, the languages, available for
a record, are defined by the associated site configuration.

The language field type therefore allows to finally decouple the actually
available site languages from the `sys_language` table. This effectively reduces
quite an amount of code and complexity, since no relations have to be fetched
and processed anymore. This also makes the `sys_refindex` table a bit smaller,
since no entries have to be added for this relation anymore. To clean up your
existing reference index, you might use the CLI command
:php:`bin/typo3 referenceindex:update`.

Another pain point was the special `-1` language which always had to be added
to each TCA configuration manually. Thus, a lot of different implementations
of this special case could be found in one and the same TYPO3 installation.

The new TCA type now automatically displays all available languages for the
current context (the corresponding site configuration) and also automatically
adds the special `-1` language for all record types, except `pages`.
