..  include:: /Includes.rst.txt
..  _columns-file-properties-behaviour-enableCascadingDelete:

=====================
enableCascadingDelete
=====================

.. confval:: behaviour > enableCascadingDelete (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['behaviour']
    :type: boolean
    :Scope: Proc.
    :Default: true

    Usually when the parent record is deleted all attached
    :sql:`sys_file_references` are deleted. This default behaviour can be
    disabled here.

    This property can also be overridden by page TSconfig.
