.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_insertClipboard:

===============
insertClipboard
===============

.. confval:: insertClipboard

   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The clipboard control adds a control button for :code:`type='group'` to paste records from
   a users clipboard into the selection. It is enabled by default for :code:`type='group'` and
   shown below the :ref:`element browser <columns-group-properties-elementBrowser>` if the
   order has not been changed using the `before` and `after` keywords. It can be turned off by
   setting `disabled` to true, just like any other fieldControl.

   .. figure:: /ColumnsConfig/Type/Group/Images/TypeGroupFieldControlInsertClipboardStyleguideFolder9.png
      :alt: The clipboard control below the insert record control
      :class: with-shadow

      The clipboard control below the insert record control
