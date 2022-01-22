.. include:: /Includes.rst.txt
.. _columns-inline-properties-customcontrols:

==============
customControls
==============

.. confval:: customControls

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display

   Numerical array containing definitions of custom header controls for IRRE fields. This makes it possible to create
   special controls by calling user-defined functions (userFuncs). Each item in the array item must be an array itself,
   with at least on key "userFunc" pointing to the user function to call.

   The userFunc string is defined as usual in TYPO3 as ['class']->['method'], e.g. ::

      \Vendor\Extension\MyClass::class . '->myUserFuncMethod'

   For more details, see the implementation in :php:`TYPO3\\CMS\\Backend\\Form\\Container\\InlineControlContainer`
   and search for "customControls".
