.. include:: /Includes.rst.txt
.. _columns-text-properties-richtextConfiguration:

=====================
richtextConfiguration
=====================


:aspect:`Datatype`
    string (keyword)

:aspect:`Scope`
    Display / Proc.

:aspect:`renderType`
    :ref:`default <columns-text-renderType-default>`

:aspect:`Description`
    The value is a key in :php:`$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']` array and specifies the
    YAML configuration source field used for that RTE field. It does not make sense without having property
    :ref:`enableRichtext <columns-text-properties-enableRichtext>` set to true.

    Extension `rte_ckeditor` registers three presets: `default`, `minimal` and `full` and points to
    YAML files with configuration details.

    Integrators may override for instance the `default` key to point to an own YAML file which will affect
    all core backend RTE instances to use that configuration.

    If this property is not specified for an RTE field, the system will fall back to the `default`
    configuration.

    .. note::
        If dealing with the YAML files, be aware it is usually not allowed to base your configuration
        on existing files and to extend them, but it is required to rely on a full own set of configuration files.
