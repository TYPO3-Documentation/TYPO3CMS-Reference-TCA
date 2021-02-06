.. include:: /Includes.rst.txt
.. _columns-text-properties-richtextConfiguration:

=====================
richtextConfiguration
=====================

.. confval:: richtextConfiguration

   :type: string (keyword)
   :Scope: Display  / Proc.
   :RenderType: :ref:`default <columns-text-renderType-default>`

   The value is a key in :php:`$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']` array and specifies the
   YAML configuration source field used for that RTE field. It does not make sense without having property
   :ref:`enableRichtext <columns-text-properties-enableRichtext>` set to true.

   Extension `rte_ckeditor` registers three presets: `default`, `minimal` and `full` and points to
   YAML files with configuration details.

   Integrators may override for instance the `default` key to point to an own YAML file which will affect
   all core backend RTE instances to use that configuration.

   If this property is not specified for an RTE field, the system will fall back to the `default`
   configuration.

Examples
========

.. _tca_example_rte_4:

RTE with minimal configuration
------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Rte4.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Rte4.rst.txt


.. _tca_example_rte_5:

RTE with full configuration
---------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Rte4.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Rte4.rst.txt

