..  include:: /Includes.rst.txt

=====================
enableCascadingDelete
=====================

..  confval:: behaviour[enableCascadingDelete]
    :name: inline-behaviour-enableCascadingDelete
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['behaviour']
    :type: boolean
    :Scope: Proc.

    Default true. Usually in inline relations, if a parent is deleted, all children are deleted along with the parent.
    This flag can be used to disable that cascading delete. Example usage: A frontend user (parent) has assigned
    invoices (children). If a frontend user is deleted, it could be useful to keep the invoices.
