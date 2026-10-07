..  include:: /Includes.rst.txt

..  _tca-examples:
..  _tca-examples-extension-styleguide:
..  _tca-examples-styleguide-howto:
..  _styleguide:
..  _tca-examples-extension-examples:
..  _tca-examples-core:

=================================
Exploring TCA with the styleguide
=================================

The TYPO3 extension :composer:`typo3/cms-styleguide` offers an example
record for each field type, with many variants of their options. It is a
good place to see a field in a backend before you configure it:

#.  Install the extension:

    ..  code-block:: console

        composer require --dev typo3/cms-styleguide

#.  Open the module :guilabel:`Administration > Styleguide`, select
    :guilabel:`Manage example page trees`, and create the page tree with
    the TCA demo records.

#.  Open the records in the new page tree :guilabel:`styleguide TCA demo`
    with the :guilabel:`Content > Records` module.

#.  Find the TCA of a field in the folder :file:`Configuration/TCA/` of the
    extension. The table `tx_styleguide_elements_basic` holds the records of
    the page :guilabel:`elements basic`, for example.

..  tip::
    With the backend debug mode, the backend form shows the name of each
    field next to its label. Turn it on in
    :guilabel:`System > Settings > Configuration Presets > Debug`.
