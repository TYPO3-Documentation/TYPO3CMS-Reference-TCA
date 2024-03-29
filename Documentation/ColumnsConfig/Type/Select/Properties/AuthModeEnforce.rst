:orphan:

..  include:: /Includes.rst.txt
..  _columns-select-properties-authmode-enforce:

=================
authMode\_enforce
=================

..  versionchanged:: 12.0
    Handling of TCA config option :php:`authMode_enforce` has been removed.

Migration
=========

Using authMode_enforce='strict'
-------------------------------

Extensions with select fields using :php:`authMode` previously had different handling
if :php:`authMode_enforce => 'strict'` has been set: Let us say an editor accesses a record
with an :php:`authMode` field being set to a value it has no access to. With :php:`authMode_enforce`
**not** being set to :php:`strict`, the editor was still able to edit the record and set the value
to something it had access to. With :php:`authMode_enforce` being set to :php:`strict`, the editor
was not allowed to access the record. This has been streamlined: The backend interface no longer
renders those records for the editor and an "access denied" message is rendered instead. To
prevent this, a group this editor is member of needs to be adapted to allow access to this
particular value in the "Explicitly allow field values" (:sql:`explicit_allowdeny`) field.
