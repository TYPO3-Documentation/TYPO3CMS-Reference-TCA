..  include:: /Includes.rst.txt
..  _types:

==============================
Fields to be displayed (types)
==============================

..  note::
    :ref:`Click here if you are looking for ['columns']['config']['type']. <columns-types>`

The ['types'] section plays a crucial role in TCA to specify which fields from the :ref:`['columns'] section <columns>`
are displayed if editing a table row in FormEngine. At least one type has to be configured before any field
will show up, the default type is :code:`0`.

Multiple types can be configured, which one is selected depends on the value of the field specified in
:ref:`['ctrl']['type'] property <ctrl-reference-type>`. This approach is similar to what is often done with
`Single Table Inheritance <https://en.wikipedia.org/wiki/Single_Table_Inheritance>`__ in Object-orientated
programming.

..  toctree::

    Introduction
    Examples
    Properties/Index
