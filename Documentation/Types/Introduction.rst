..  include:: /Includes.rst.txt

============
Introduction
============

The ['types'] system is powerful and allows differently shaped editing forms re-using fields, having own fields
for specific forms and arranging fields differently on top of a single database table. The `tt_content` with all
its different content elements is a good example on what can be done with ['types'].

The basic ['types'] structure looks like this:

..  code-block:: php

     'types' => [
          '0' => [
                'showitem' => 'aField, anotherField',
          ],
          'anotherType' => [
                'showitem' => 'aField, aDifferentField',
          ],
     ],

So, the basic array has a key field with type names (here '0', and 'anotherType'), with a series of possible
properties each, most importantly the :ref:`showitem <types-properties-showitem>` property.
