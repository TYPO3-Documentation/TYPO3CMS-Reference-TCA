:aspect:`Datatype`
    string (list of keywords)

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
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

:aspect:`Examples`
    Trimming the value for white space before storing in the database:

    .. code-block:: php

        'aField' => [
            'label' => 'aLabel',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],

    You can supply own form evaluations in an extension by creating a class with two functions:
    `deevaluateFieldValue()` called when opening the record and `evaluateFieldValue()` called for validation when
    saving the record:

    :file:`EXT:extension/Classes/Evaluation/ExampleEvaluation.php`

    .. code-block:: php

        namespace Vendor\Extension\Evaluation;

        /**
         * Class for field value validation/evaluation to be used in 'eval' of TCA
         */
        class ExampleEvaluation
        {
            /**
             * Server-side validation/evaluation on saving the record
             *
             * @param string $value The field value to be evaluated
             * @param string $is_in The "is_in" value of the field configuration from TCA
             * @param bool $set Boolean defining if the value is written to the database or not.
             * @return string Evaluated field value
             */
            public function evaluateFieldValue($value, $is_in, &$set)
            {
                return $value . ' [added by PHP on saving the record]';
            }

            /**
             * Server-side validation/evaluation on opening the record
             *
             * @param array $parameters Array with key 'value' containing the field value from the database
             * @return string Evaluated field value
             */
            public function deevaluateFieldValue(array $parameters)
            {
                return $parameters['value'] . ' [added by PHP on opening the record]';
            }
        }

    :file:`EXT:extension/ext_localconf.php`:

    .. code-block:: php

        // Register the class to be available in 'eval' of TCA
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['Vendor\\Extension\\Evaluation\\ExampleEvaluation'] = '';

    :file:`EXT:extension/Configuration/TCA/tx_example_record.php`:

    .. code-block:: php

        'columns' => [
            'example_field' => [
                'config' => [
                    'type' => 'text',
                    'eval' => 'trim,Vendor\\Extension\\Evaluation\\ExampleEvaluation,required'
                ],
            ],
        ],
