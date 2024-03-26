..  include:: /Includes.rst.txt
..  _columns-properties-config:

======
config
======

..  confval:: config
    :name: columns-config
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]
    :Required: true
    :type: array
    :Scope: Proc. / Display

    Contains the main configuration properties of the fields display and processing behavior.

    The possibilities for this array depend on the value of the array keys "type" and "renderType" within the array,
    see :ref:`the dedicated section <columns-types>` for details.

Examples
========

Simple input field
------------------

..  include:: /Images/Rst/Input1.rst.txt

..  include:: /CodeSnippets/Input1.rst.txt
