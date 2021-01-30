.. include:: /Includes.rst.txt

.. _tca_examples:

==================
About the examples
==================

.. toctree::

   StyleGuide

.. _tca_examples_extension_styleguide:

Extension styleguide
====================

Many of the examples are part of the TYPO3 extension :file:`styleguide`. This
extension offers numbered examples for any field type. Furthermore there
are examples with different properties set to different values.

Read here about how to :ref:`install and use the styleguide extension
<styleguide>`.

.. _tca_examples_extension_examples:

Extension examples
==================

Some examples can also be found in the TYPO3 extension :file:`examples`. This
extension contains special configurations that have not been used in the
extension :file:`stylguide` nor in the TYPO3 Core.

The extension :file:`examples` can be installed via composer:

.. code-block:: console

   composer require --dev t3docs/examples

It can also be downloaded from the `TYPO3 extension repository
<https://extensions.typo3.org/extension/examples/>`__


.. _tca_examples_core:

Examples from the TYPO3 Core
============================

Some examples are taken from the TYPO3 Core and some come from
different system extensions. You can open their TCA definitions in the
corresponding file in the system extension.

Common examples are taken from the following tables:

:sql:`pages`
   :file:`public/typo3/sysext/core/Configuration/TCA/pages.php`

:sql:`sys_category`
   :file:`public/typo3/sysext/core/Configuration/TCA/sys_category.php`

:sql:`sys_file`
   :file:`public/typo3/sysext/core/Configuration/TCA/sys_file.php`

:sql:`sys_template`
   :file:`public/typo3/sysext/frontend/Configuration/TCA/sys_template.php`


:sql:`tt_content`
   :file:`public/typo3/sysext/frontend/Configuration/TCA/tt_content.php`


.. toctree::

   StyleGuide
