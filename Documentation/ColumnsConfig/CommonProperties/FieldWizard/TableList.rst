..  include:: /Includes.rst.txt
..  _tca_property_fieldWizard_tableList:

=========
tableList
=========

..  confval:: tableList
    :name: fieldWizard-tableList
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']
    :type: array
    :Scope: fieldWizard
    :Types: :ref:`group <columns-group>`

    **Only with internal\_type='db'**

    Render a list of allowed tables and link to element browser. This field wizard is enabled by default.
    This wizard allows to easily select records from a popup.
