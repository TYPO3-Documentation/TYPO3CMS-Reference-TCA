..  include:: /Includes.rst.txt
..  _columns-file-properties-readOnly:

========
readOnly
========

.. confval:: readOnly (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display

    The files attached to this record are displayed but cannot be changed
    in the backend form.

    This property can also be overridden by page TSconfig.

    .. warning::
        This property affects only the display. It is still possible to write
        to those fields when using the :ref:`DataHandler <t3coreapi:tce>`.
