.. include:: /Includes.rst.txt
.. _columns-properties-exclude:

=======
exclude
=======

.. confval:: exclude

   :Required: false
   :type: boolean
   :Scope: Proc. / Display

   If set, all backend users are prevented from editing the field unless they
   are members of a backend user group with this field added as an
   "Allowed Excludefield" (or "admin" user).

   See :ref:`Access lists <t3coreapi:access-options-access-lists>` for more
   about permissions.

Example
=======

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start input_1
   :end-before: end input_1
