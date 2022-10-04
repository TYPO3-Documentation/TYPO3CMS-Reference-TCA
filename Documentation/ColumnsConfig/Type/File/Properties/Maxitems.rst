..  include:: /Includes.rst.txt
..  _columns-file-properties-maxitems:

========
maxitems
========

.. confval:: maxitems (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer > 0
    :Scope: Display / Proc.

    Maximum number of files that can be attached. Defaults to a high value.
    JavaScript record validation prevents the record from being saved if the
    limit is not satisfied.

    This property can also be overridden by page TSconfig.
