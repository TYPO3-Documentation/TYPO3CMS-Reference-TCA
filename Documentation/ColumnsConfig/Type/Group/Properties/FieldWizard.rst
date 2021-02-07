.. include:: /Includes.rst.txt
.. _columns-group-properties-fieldWizard:

===========
fieldWizard
===========

The field of type group can enable all common :ref:`field control options
<tca_property_fieldControl>`. Furthermore the following are availible:

.. confval:: elementBrowser

   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The element browser field control used in :code:`type='group'` renders a
   button to open element browser depending on selected :code:`internal_type`.
   It is enabled by default if rendering a group element.

.. confval:: insertClipboard

   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The clipboard control adds a control button for :code:`type='group'` to paste records from
   a users clipboard into the selection. It is enabled by default for :code:`type='group'` and
   shown below the :ref:`element browser <columns-group-properties-elementBrowser>` if the
   order has not been changed using the `before` and `after` keywords. It can be turned off by
   setting `disabled` to true, just like any other fieldControl.

Examples
========

Group field with element browser enabled
----------------------------------------

   .. include:: /Includes/Images/Styleguide/RstIncludes/GroupDb1.rst.txt

   .. include:: /Includes/Snippets/Styleguide/RstIncludes/GroupDb1.rst.txt


Group field with element browser disabled
-----------------------------------------

   The element browser control can be disabled by setting :php:`disabled = true`:

   .. include:: /Includes/Images/Styleguide/RstIncludes/GroupDb3.rst.txt

   .. include:: /Includes/Snippets/Styleguide/RstIncludes/GroupDb3.rst.txt
