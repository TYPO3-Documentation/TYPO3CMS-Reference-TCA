.. include:: /Includes.rst.txt
.. _columns-select-properties-authmode:

========
authMode
========

.. confval:: authMode

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (keyword)
   :Scope: Display  / Proc.
   :RenderType: all

   .. versionchanged:: 12.ß
      The only valid value for TCA config option :php:`authMode` on :php:`'type' => 'select'`
      fields is now :php:`explicitAllow`. The values :php:`explicitDeny` and :php:`individual`
      are invalid and no longer evaluated.

   Authorization mode for the selector box. The only possible option is:

   explicitAllow
      All static values from the "items" array of the selector box will be added to a matrix in the backend user
      configuration where a value must be explicitly selected if a user (other than admin) is allowed to use it!)

Migration
=========

Using authMode='explicitDeny'
-----------------------------

The "deny list" approach for single field values has been removed, the only allowed option
for :php:`authMode` is :php:`explicitAllow`. Extensions using config value :php:`explicitDeny`
should be adapted to switch to :php:`explicitAllow` instead. The upgrade wizard
"Migrate backend groups "explicit_allowdeny" field to simplified format." that transfers
existing :sql:`be_groups` rows to the new format *drops* any :sql:`DENY` fields and instructs
admins no set new access rights of affected backend groups.

Using authMode='individual'
---------------------------

Handling of :php:`authMode` being set to :php:`individual` has been fully dropped. There is
no core-provided alternative. This has been an obscure setting since ever and there is no
direct migration. Extension that rely on this handling need to find a substitution based on
Core hooks, Core events or other existing Core API functionality.
