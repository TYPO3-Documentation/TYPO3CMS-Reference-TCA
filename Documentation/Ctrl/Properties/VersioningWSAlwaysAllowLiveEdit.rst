.. include:: /Includes.rst.txt
.. _ctrl-reference-versioningws-alwaysallowliveedit:

=================================
versioningWS\_alwaysAllowLiveEdit
=================================

.. confval:: versioningWS_alwaysAllowLiveEdit
   :name: ctrl-versioningWS-alwaysAllowLiveEdit
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: boolean
   :Scope: Special


   If set, this table can always be edited live even in a workspace and
   even if "live editing" is not enabled in a custom workspace. For
   instance this is set by default for Backend user and group records
   since it is assumed that administrators like the flexibility of
   editing backend users without having to go to the Live workspace.
