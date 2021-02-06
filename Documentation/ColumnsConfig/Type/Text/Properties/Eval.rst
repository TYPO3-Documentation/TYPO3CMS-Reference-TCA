.. include:: /Includes.rst.txt
.. _columns-text-properties-eval:

====
eval
====

.. confval::  eval

   :type: string (list of keywords)
   :Scope: Display  / Proc.
   :RenderType: :ref:`default <columns-text-renderType-default>`

   Configuration of field evaluation. None of these apply for RTE fields.

   Some of these evaluation keywords will trigger a JavaScript pre-evaluation in the form. Other evaluations
   will be performed in the backend.

   The evaluation functions will be executed in the list-order, available keywords:

   required
      A non-empty value is required in the field (otherwise the form cannot be saved).

   trim
      The value in the field will have white spaces around it trimmed away.

   null
      An empty value (string) will be stored as :code:`NULL` in the database.
      (requires a proper sql definition). Often combined with "mode" property.

   Vendor\\Extension\\*
      User defined form evaluations.

Examples
========

.. _tca_example_text_7:

Trimming input
--------------

Trimming the value for white space before storing in the database:

.. include:: /Includes/Images/Styleguide/RstIncludes/Text7.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text7.rst.txt


.. _tca_example_text_9:

Custom form evaluation
----------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Text9.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text9.rst.txt

You can supply own form evaluations in an extension by creating a class with two functions:
:php:`deevaluateFieldValue()` called when opening the record and :php:`evaluateFieldValue()`
called for validation when saving the record:

:file:`EXT:styleguide/Classes/UserFunctions/FormEngine/TypeText9Eval.php`

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/TypeText9Eval.rst.txt

:file:`EXT:styleguide/ext_localconf.php`:

.. code-block:: php

   // Register the class to be available in 'eval' of TCA
   $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']
      ['TYPO3\\CMS\\Styleguide\\UserFunctions\\FormEngine\\TypeText9Eval'] = '';

