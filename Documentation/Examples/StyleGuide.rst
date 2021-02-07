.. include:: /Includes.rst.txt
.. index::
   Examples; Styleguide
   Styleguide; Installation
   Styleguide; Usage
.. _tca_examples_styleguide_howto:
.. _styleguide:

=====================================
How to use the `styleguide` extension
=====================================

.. rst-class:: bignums

1. Install the extension `styleguide`

   In composer based installations it can be installed via

   .. code-block:: console

      composer require --dev typo3/cms-styleguide

   For manual installations you can download the extension
   `styleguide from GitHub <https://github.com/TYPO3/styleguide>`__.


2. Create a page tree with the examples

   Go to the :guilabel:`Help menu (?) > Styleguide`. In the styleguide
   choose tab :guilabel:`TCA / Records` and then the button
   :guilabel:`Create styleguide page tree with data`. After you are done
   you can delete the example page tree by clicking the other button
   :guilabel:`Delete styleguide page tree and all styleguide data records`

   .. include:: /Includes/Images/Styleguide/RstIncludes/StyleguideCreateTCA.rst.txt


3. Have a look at the examples

   Navigate to the new page tree called :guilabel:`styleguide TCA demo`, using
   the :guilabel:`List` module. Choose a page, for example
   :guilabel:`elements basic`, and open the English record. The records in the
   other languages can be used to see examples of localization and the relation
   between languages.


   .. include:: /Includes/Images/Styleguide/RstIncludes/StyleguideViewExample.rst.txt


   .. hint::
      If you turn on the backend debugging you can see the names of all fields as
      used in the database. Furthermore, in fields that hide the real database
      value (such as checkboxes) you can see the value hidden behind the label.
      To activate backend debugging go to: :guilabel:`Admin Tools > Settings
      > Configuration Presets > Debug Settings > BE/debug`.


4. Find the corresponding TCA definition

   All TCA examples are called after their type and then numbered. The tables
   carry the same name as the entry in the page tree, prefixed with
   :file:`tx_styleguide_` therefore you would find the examples from `elements_basic` at:
   :file:`public/typo3conf/ext/styleguide/Configuration/TCA/tx_styleguide_elements_basic.php`.

   Open the file with an editor of your choice. Then search for the name of the
   field, in this example `checkbox_9`. You can then have a look at the TCA
   definition in a working example.

   .. include:: /Includes/Images/Styleguide/RstIncludes/StyleguideTcaDefinition.rst.txt

