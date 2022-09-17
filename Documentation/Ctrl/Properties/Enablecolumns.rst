.. include:: /Includes.rst.txt
.. _ctrl-reference-enablecolumns:

=============
enablecolumns
=============

.. confval:: enablecolumns

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: array
   :Scope: Proc. / Display


   Specifies which *publishing control features* are automatically implemented for the table.

   This includes that records can be "disabled" or "hidden", have a starting and/or ending time and be access
   controlled so only a certain front end user group can access them. This property is used by the
   :ref:`RestrictionBuilder <t3coreapi:database-restriction-builder>` to create SQL fragments.

   These are the keys in the array you can use. Each of the values must be a field name in the table which
   should be used for the feature:

   disabled
      Defines which field serves as hidden/disabled flag.

   starttime
      Defines which field contains the starting time.

   endtime
      Defines which field contains the ending time.

   fe\_group
      Defines which field is used for access control via a selection of FE user groups.

   .. note::
      In general these fields do *not* affect the access or display in the backend! They are primarily
      related to the frontend. However the icon of records having these features enabled will
      normally change as these examples show:

   .. include:: /Images/Rst/CtrlEnableFields.rst.txt

   See also the :ref:`delete <ctrl-reference-delete>` feature which is related, but is active for both frontend and backend.

Examples
========

Make table hideable
===================

.. include:: /CodeSnippets/Manual/Ctrl/Hidden.rst.txt

Common enable fields
====================

.. include:: /Images/Rst/CtrlEnableFields.rst.txt

.. include:: /CodeSnippets/TxStyleguideCtrlCommon.rst.txt

.. _enablefields_usage:

Enablecolumns / enablefields usage
==================================

Most ways of retrieving records in the frontend automatically respect the
:php:`ctrl->enablecolumns` settings:

Enablecolumns in TypoScript
---------------------------

Records retrieved in TypoScript via the objects
:ref:`RECORDS <t3tsref:cobj-records>`, :ref:`CONTENT <t3tsref:cobj-content>`
automatically respect the settings in section
:ref:`ctrl->enablecolumns <ctrl-reference-enablecolumns>`.

Enablecolumns / enablefields in Extbase
----------------------------------------

In Extbase repositories the records are hidden in the frontend by default,
however this behaviour can be disabled by setting
:php:`$querySettings->setIgnoreEnableFields(true)` in the
:ref:`repository <t3coreapi:extbase-repository>`.

Enablecolumns in queries
-------------------------

Using the QueryBuilder
:ref:`enable columns restrictions are automatically applied <t3coreapi:database-select>`.

The same is true when
:ref:`select() is called on the connection <t3coreapi:database-connection-select>`.

See the :ref:`t3coreapi:database-restriction-builder` for details.

However this could be disabled by setting:

.. code-block:: php
   :caption: EXT:my_extension/SomeClass.php

   // use TYPO3\CMS\Core\Utility\GeneralUtility;
   // use TYPO3\CMS\Core\Database\ConnectionPool;
   // use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction

   $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
   $queryBuilder
      ->getRestrictions()
      // Use with care, the following may reveal information:
      ->removeAll()
      ->add(GeneralUtility::makeInstance(DeletedRestriction::class));
