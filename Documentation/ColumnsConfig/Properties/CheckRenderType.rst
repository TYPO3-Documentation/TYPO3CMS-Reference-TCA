renderType
~~~~~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Proc

:aspect:`Description`

   checkboxToggle
      A pure toggle switch. No additional configuration is necessary. Its state can be inverted via
      :code:`invertStateDisplay`.

   checkboxLabeledToggle
      A toggle switch where both states can be labelled (ON/OFF, Visible / Hidden or alike).
      Its state can be inverted via :code:`invertStateDisplay`

   default
      A toggle that toggles between two icon identifiers.
      By default the toggle icons are visually designed to mimic a checkbox.
      Its state can be inverted via :code:`invertStateDisplay`.


Examples:

.. code-block:: php

   'type' => 'checkboxLabeledToggle',
   'items' => [
       [
           0 => 'foo',
           1 => '',
           'labelChecked' => 'Enabled',
           'labelUnchecked' => 'Disabled',
           'invertStateDisplay' => false
       ],
   ],

.. code-block:: php

   'type' => 'default',
   'items' => [
      [
         0 => 'foo',
         1 => '',
         'iconIdentifierChecked' => 'styleguide-icon-toggle-checked',
         'iconIdentifierUnchecked' => 'styleguide-icon-toggle-checked',
         'invertStateDisplay' => false
      ]
   ]

