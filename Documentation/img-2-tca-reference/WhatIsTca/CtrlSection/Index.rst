.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


The [ctrl] section vs. the other sections
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

In almost the whole system the [ctrl]section of the $TCA entry for a
table plays a crucial role. For  *all* tables configured in $TCA this
section  *must* exist in $TCA. The other sections (except
[feInterface]) can optionally be stored in another file.

This feature allows scalability since hundreds of tables can be
configured with their complete [ctrl]sections while leaving a
relatively small memory footprint since they don't define all the
other sections by default. Please see the [ctrl]-property
dynamicConfigFileand the section "Loading the full $TCA dynamically"
(in Appendix B) for more details.

This has the following implications:

- You can always depend on accessing information in the [ctrl]section,
  e.g. $TCA['your\_table\_name']['ctrl']

- But  *before* you can depend on information in any other section
  (except [feInterface]) you should:

#. Call t3lib\_div::loadTCA('your\_table\_name');(This will dynamically
   load the full content of the $TCA array for the table)

#. Then access the information, e.g.
   $TCA['your\_table\_name']['columns']['your\_field\_name']

