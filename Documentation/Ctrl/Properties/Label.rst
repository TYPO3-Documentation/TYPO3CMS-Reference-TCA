.. include:: /Includes.rst.txt
.. _ctrl-reference-label:

=====
label
=====

.. confval:: label

   :type: string (field name)
   :Scope: Display


   **Required!**

   Points to the field name of the table which should be used as the "title" when the record is displayed in the system.

   .. note::
      :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property (but it is still required).

   .. warning::
      For the label only regular input or text fields should be used. Otherwise issues may occur and prevent from a working system if :code:`TCEMAIN.table.tt_content.disablePrependAtCopy` is not set or set to :code:`0`.

A simple example
----------------

.. include:: /Includes/Images/Styleguide/RstIncludes/TxStyleguideCtrlMinimal.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/TxStyleguideCtrlMinimal.rst.txt


.. _ctrl-reference-label-alt:

label\_alt
==========

.. confval:: label_alt

   :type: String (comma-separated list of field names)
   :Scope: Display


   Comma-separated list of field names, which are holding alternative
   values to the value from the field pointed to by "label" (see above)
   if that value is empty. May not be used consistently in the system,
   but should apply in most cases.

   .. note::
      :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property, also
      see :ref:`label_alt_force <ctrl-reference-label-alt-force>`.

Examples
--------

Example for table "tt\_content"::

   'ctrl' => [
      'label' => 'header',
      'label_alt' => 'subheader,bodytext',
   ],


.. _ctrl-reference-label-alt-force:

label\_alt\_force
=================

.. confval:: label_alt_force

   :type: boolean
   :Scope: Display


   If set, then the :ref:`label_alt <ctrl-reference-label-alt>` fields
   are always shown in the title separated by comma.

   .. note::
      :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property.
