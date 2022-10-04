..  include:: /Includes.rst.txt
..  _columns-file-properties-overrideChildTca:

================
overrideChildTca
================

.. confval:: overrideChildTca (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Override the TCA of the :sql:`sys_file_reference` records representing
    the files attached to this record.
