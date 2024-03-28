..  include:: /Includes.rst.txt

..  _columns-input:
..  _columns-input-introduction:
..  _columns-input-renderType-default:

=====
Input
=====

:php:`type='input'` generates a html :html:`<input>` field with the :html:`type`
attribute set to :html:`text`. It is possible to apply additional features such
as the :ref:`valuePicker <columns-input-properties-valuePicker>`.

In the database, this field is typically set to a `VARCHAR` or `CHAR` field with
appropriate length.

..  deprecated:: 12.0
     The following render types have been deprecated:

     *    :php:`renderType=inputDateTime`: Use the TCA type
          :ref:`datetime <columns-datetime>` instead.
     *    :php:`renderType=colorpicker`: Use the TCA type
          :ref:`color <columns-color>` instead.
     *    :php:`renderType=inputLink`: Use the TCA type :ref:`link <columns-link>`
          instead.

..  _columns-input-examples:

Examples
========

..  _tca_example_input_1:

Simple input field
------------------

..  include:: /Images/Rst/Input1.rst.txt

..  include:: /CodeSnippets/Input1.rst.txt

Input with placeholder and null handling
----------------------------------------

..  include:: /Images/Rst/Input28.rst.txt

..  include:: /CodeSnippets/Input28.rst.txt

..  _tca_example_input_33:

Value picker
------------

..  include:: /Images/Rst/Input33.rst.txt


..  include:: /CodeSnippets/Input33.rst.txt

..  toctree::
    :titlesonly:

    Properties/Index
