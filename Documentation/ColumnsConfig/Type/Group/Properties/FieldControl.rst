.. include:: /Includes.rst.txt
.. _columns-group-properties-fieldControl:
.. _tca_property_fieldControl_elementBrowser:
.. _columns-group-properties-elementBrowser:
.. _tca_property_fieldControl_insertClipboard:

============
fieldControl
============

The field of type group can enable all common :ref:`field control options
<tca_property_fieldControl>`. Furthermore the following are available:

.. confval:: elementBrowser

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The element browser field control used in :code:`type='group'` renders a
   button to open an element browser. It is enabled by default if rendering a
   group element.

.. confval:: insertClipboard

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The clipboard control adds a control button for :code:`type='group'` to paste records from
   a users clipboard into the selection. It is enabled by default for :code:`type='group'` and
   shown below the **element browser** if the
   order has not been changed using the `before` and `after` keywords. It can be turned off by
   setting `disabled` to true, just like any other fieldControl.

Examples
========

Group field with element browser enabled
----------------------------------------

.. include:: /Images/Rst/GroupDb1.rst.txt

.. include:: /CodeSnippets/GroupDb1.rst.txt


Group field with element browser disabled
-----------------------------------------

The element browser control can be disabled by setting :php:`disabled = true`:

.. include:: /Images/Rst/GroupDb3.rst.txt

.. include:: /CodeSnippets/GroupDb3.rst.txt
