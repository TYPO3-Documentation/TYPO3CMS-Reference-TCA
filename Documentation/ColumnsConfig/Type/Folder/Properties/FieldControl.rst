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
   :Types: :ref:`folder <columns-folder>`

   The element browser field control used in :code:`type='folder'` renders a
   button to open an element browser to choose a folder.

   It is enabled by default if rendering a folder element.

.. confval:: insertClipboard

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
   :type: array
   :Scope: fieldControl
   :Types: :ref:`folder <columns-group>`

   The clipboard control adds a control button for :code:`type='folder'` to paste records from
   a users clipboard into the selection. It is enabled by default for :code:`type='group'` and
   shown below the **element browser** if the
   order has not been changed using the `before` and `after` keywords. It can be turned off by
   setting `disabled` to true, just like any other fieldControl.
