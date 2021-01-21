.. include:: /Includes.rst.txt
.. _columns-properties-description:

===========
Description
===========

.. confval:: description

   :Required: false
   :type: string or LLL reference
   :Scope: Display

   The property can be used to display an additional help text between the field label and
   the user input when editing records. As an example, the Core uses the description property
   in the site configuration module when editing a site on some properties like `identifier`.

   The property is available on all common `TCA` types like `input` and `select` and so on.

Example
=======

The field can be used with a string that will be directly output or with a
language reference:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start input_1
   :end-before: end input_1
   :lines: 2-

.. figure:: /Examples/Images/Styleguide/Input1.png
   :alt: Show description text below label
   :class: with-shadow

You can find this example in the :ref:`extension styleguide <styleguide>`.
