.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_insertClipboard:

===============
insertClipboard
===============

:aspect:`Datatype`
   array

:aspect:`Scope`
   fieldControl

:aspect:`types`
   :ref:`group <columns-group>`

:aspect:`Description`
   The clipboard control adds a control button for :code:`type='group'` to paste records from
   a users clipboard into the selection. It is enabled by default for :code:`type='group'` and
   shown below the :ref:`element browser <columns-group-properties-elementBrowser>` if the
   order has not been changed using the `before` and `after` keywords. It can be turned off by
   setting `disabled` to true, just like any other fieldControl.

   .. figure:: ../../Images/TypeGroupFieldControlInsertClipboardStyleguideFolder9.png
      :alt: The clipboard control below the insert record control
      :class: with-shadow

      The clipboard control below the insert record control
