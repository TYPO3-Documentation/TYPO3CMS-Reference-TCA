..  include:: /Includes.rst.txt
..  _columns-select-rendertype-selectSingle:

============
selectSingle
============

Single select fields display a select field from which only one value can be
chosen.

The renderType selectSingle creates a drop-down box with items to select a
single value. Only if :confval:`select-single-size` is set to a
value greater than one, a box is rendered containing all selectable elements
from which one can be chosen.

..  contents:: Table of contents

..  _columns-select-rendertype-selectSingle-examples:

Examples for select fields with renderType `selectSingle`
=========================================================

..  _tca_example_select_single_3:

Simple select drop down with static and database values
-------------------------------------------------------

..  include:: /Images/Rst/SelectSingle3.rst.txt

..  include:: /CodeSnippets/SelectSingle3.rst.txt


..  _tca_example_select_single_12:

Select foreign rows with icons
------------------------------

..  include:: /Images/Rst/SelectSingle12.rst.txt

..  include:: /CodeSnippets/SelectSingle12.rst.txt


..  _tca_example_select_single_10:

Select a single value from a list of elements
---------------------------------------------

..  include:: /Images/Rst/SelectSingle10.rst.txt

..  include:: /CodeSnippets/SelectSingle10.rst.txt


..  _columns-select-properties:

Properties of the TCA column type `select` with renderType `selectSingle`
=========================================================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowNonIdValues.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AuthMode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AuthModeEnforce.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AutoSizeMax.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Behaviour.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DbFieldLength.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DisableNonMatchingValueElement.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FileFolderConfig.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTablePrefix.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTableWhere.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ItemGroups.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Items.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ItemsProcFunc.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mm.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Multiple.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:
