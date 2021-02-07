.. include:: /Includes.rst.txt
.. _columns-group-properties-filter:

======
filter
======

.. confval:: filter

   :type: array
   :Scope: Proc. / Display
   :InternalType: db

   Define filters for item values. Doesn't work in combination with a wizard.

   This is useful when only foreign records matching certain criteria should be allowed to be used as values in the
   group field. The values are filtered in the Element Browser as well as during processing in DataHandler. Filter
   userFuncs should have two input arguments ($parameters and $parentObject). The first argument ($parameters) is an
   array with the parameters of the filter as configured in the TCA, but with the additional parameter "values", which
   contains the array of values which should be filtered by the userFunc. The function must return the filtered
   array of values.

   Multiple filters can be defined, and an array of configuration data for each of the filters can be supplied:

   .. code-block:: php

      'filter' => [
         [
            'userFunc' => \Vendor\Extension\MyClass::class . '->doFilter',
            'parameters' => [
               // optional parameters for the filter go here
            ],
         ],
         [
            'userFunc' => \Vendor\Extension\OtherClass::class . '->myFilter',
            'parameters' => [
               // optional parameters for the filter go here
            ],
         ],
      ],

Examples
========

Say you have a "person" table with fields "gender" (radio buttons) as well as "mother" and "father", both group
fields with relations to the same table.

Now, in the field "mother" it should certainly only be possible to create relations to female persons. In that
case, you could use the filter functionality to make sure only females can be selected in that field.

The field configuration for the "mother" field could look like:

.. code-block:: php

   'mother' => [
      'label' => 'Mother',
      'config' => [
         'type' => 'group',
         'internal_type' => 'db',
         'allowed' => 'tx_myext_person',
         'size' => 1,
         'filter' => [
            [
               'userFunc' => \Vendor\Extension\MyClass::class . '->doFilter',
               'parameters' => [
                  'evaluateGender' => 'female',
               ],
            ],
         ],
      ]
   ],

The corresponding filter class would look like:

.. code-block:: php

   class MyClass
   {
      public function doFilter(array $parameters, $parentObject)
      {
         $fieldValues = $parameters['values'];
         // do the filtering here
         return $fieldValues;
      }
   }
