.. include:: /Includes.rst.txt
.. _columns-check-properties-validation:

==========
validation
==========

.. confval:: validation

   :type: array
   :Scope: Proc.

   Values for the :ref:`eval <columns-check-properties-eval>` rules. The keys of the array must correspond to the
   keyword of the related evaluation rule. For :code:`maximumRecordsChecked` and :code:`maximumRecordsCheckedInPid`
   the value is expected to be an integer.


Examples
========

In the example below, only five records from the same table will be allowed to have that particular box checked.

.. code-block:: php

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start checkbox_8
   :end-before: end checkbox_8
   :lines: 2-

