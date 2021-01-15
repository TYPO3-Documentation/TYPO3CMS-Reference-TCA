.. include:: /Includes.rst.txt
.. _columns-properties-description:

===========
description
===========

.. confval:: description

   :Required: false
   :type: string
   :Scope: Display

   The property can be used to display an additional help text between the field label and
   the user input when editing records. As an example, the core uses the description property
   in the site configuration module when editing a site on some properties like `identifier`.

   The property is available on all common `TCA` types like `input` and `select` and so on.

   **Example:**

   .. code-block:: php

      'columns' => [
         'input_1' => [
            'exclude' => 1,
            'label' => 'input_1 description',
            'description' => 'field description',
            'config' => [
               'type' => 'input',
            ],
         ],
      ],

   .. figure:: ../Images/Description.png
      :alt: Show description text below label
      :class: with-shadow
