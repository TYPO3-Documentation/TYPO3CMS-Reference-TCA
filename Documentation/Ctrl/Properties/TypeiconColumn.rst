.. include:: /Includes.rst.txt
.. _ctrl-reference-typeicon-column:

================
typeicon\_column
================

.. confval:: typeicon_column

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Display


    Field name, whose value decides *alternative icons* for the table records, the default icon
    is the one defined with the :ref:`iconfile <ctrl-reference-iconfile>` value.

    The values in the field referenced by this property must match entries
    in the array defined in :ref:`typeicon_classes <ctrl-reference-typeicon-classes>`
    properties. If no match is found, the default icon is used. See example in the
    related :ref:`typeicon_classes <ctrl-reference-typeicon-classes>` property.

    If used, the value of this property is often set to the same field name as :ref:`type <ctrl-reference-type>`.

    .. note::

        The pages table has a special configuration and relies on the :code:`$GLOBALS['PAGES_TYPES']` array.
