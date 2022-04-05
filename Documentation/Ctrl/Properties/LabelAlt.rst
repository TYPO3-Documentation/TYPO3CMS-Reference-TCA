.. include:: /Includes.rst.txt

.. _ctrl-reference-label-alt:

==========
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
