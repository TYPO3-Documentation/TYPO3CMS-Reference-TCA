.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_elementBrowser:

==============
elementBrowser
==============

:aspect:`Datatype`
   array

:aspect:`Scope`
   fieldControl

:aspect:`types`
   :ref:`group <columns-group>`

:aspect:`Description`
   The element browser field control used in :code:`type='group'` renders a button to open
   element browser depending on selected :code:`internal_type`. It is enabled by default if rendering a
   group element.

   .. figure:: /ColumnsConfig/Type/Group/Images/TypeGroupFieldControlElementBrowserStyleguideFolder1.png
      :alt: Open element browser popup (group_folder_1)
      :class: with-shadow

      Open element browser popup (group_folder_1)

   The element browser control can be disabled by setting :php:`disabled = true`:

   .. code-block:: php

      'myField' => [
         'config' => [
            'fieldControl' => [
               'elementBrowser' => [
                  'disabled' => true,
               ],
            ],
         ],
      ],
