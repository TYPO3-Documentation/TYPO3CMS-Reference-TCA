.. include:: /Includes.rst.txt
.. _ctrl-reference-tstamp:

======
tstamp
======

.. confval:: tstamp

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which is automatically updated to the current timestamp (UNIX-time in seconds) each time
   the record is updated/saved in the system. Typically the name "tstamp" is used for that field.

Examples
========

Example from the "haikus" table of the "example" extension::

   'ctrl' => [
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      ...
   ],

The above example shows the same definition for the :ref:`crdate <ctrl-reference-crdate>` and
:ref:`cruser_id <ctrl-reference-cruser-id>` fields.
