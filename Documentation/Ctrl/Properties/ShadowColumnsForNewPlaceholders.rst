.. include:: /Includes.rst.txt
.. _ctrl-reference-shadowcolumnsfornewplaceholders:

===============================
shadowColumnsForNewPlaceholders
===============================

.. confval:: shadowColumnsForNewPlaceholders

   :type: string (list of field names)
   :Scope: Proc.


   When a new element is created in a draft workspace, a placeholder element is created in the Live workspace.
   Some values must be stored in this placeholder and not just in the overlay record. A typical example would
   be :code:`sys_language_uid`. This property defines the list of fields whose values are "shadowed" to the Live record.

   All fields listed for this option must be defined in :php:`$GLOBALS['TCA'][<table>]['columns']` as well.

   Furthermore fields which are listed in :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`,
   :ref:`languageField <ctrl-reference-languageField>`, :ref:`label <ctrl-reference-label>` and
   :ref:`type <ctrl-reference-type>` are automatically added to this list of fields and do not have to be
   mentioned again here.

Examples:
=========

Example from "sys\_filemounts" table::

   'ctrl' => [
      'shadowColumnsForNewPlaceholders' => 'sys_language_uid,l18n_parent,colPos',
      ...
   ],
