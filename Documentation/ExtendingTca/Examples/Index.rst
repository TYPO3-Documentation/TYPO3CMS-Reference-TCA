.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Customization examples
^^^^^^^^^^^^^^^^^^^^^^

Many extracts can be found throughout the manual, but this section
provides more complete examples.


Example 1: extending the fe\_users table
""""""""""""""""""""""""""""""""""""""""

The "examples" extension adds two fields to the "fe\_users" table.
Here's the complete code::

   $temporaryColumns = array (
           'tx_examples_options' => array (
                   'exclude' => 0,
                   'label' => 'LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options',
                   'config' => array (
                           'type' => 'select',
                           'items' => array (
                                   array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.0', '1'),
                                   array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.1', '2'),
                                   array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.2', '--div--'),
                                   array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.3', '3'),
                           ),
                           'size' => 1,
                           'maxitems' => 1,
                   )
           ),
           'tx_examples_special' => array (
                   'exclude' => 0,
                   'label' => 'LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_special',
                   'config' => array (
                           'type' => 'user',
                           'size' => '30',
                           'userFunc' => 'EXT:examples/class.tx_examples_tca.php:tx_examples_tca->specialField'
                   )
           ),
   );

   t3lib_div::loadTCA('fe_users');
   t3lib_extMgm::addTCAcolumns('fe_users', $temporaryColumns,1);
   t3lib_extMgm::addToAllTCAtypes('fe_users', 'tx_examples_options;;;;1-1-1, tx_examples_special');

First of all, the fields that we want to add are detailed according to
the $TCAsyntax for columns. This configuration is stored in the
$temporaryColumns array.

After that come three precise steps:

- first we load the full $TCA for the "fe\_users" table. This is
  necessary so that all columns definition are loaded. Otherwise the new
  columns cannot be added properly.

- second the columns are actually added to the table by using
  t3lib\_extMgm::addTCAcolumns().

- lastly the fields are added to the "types" definition of the
  "fe\_users" table by using t3lib\_extMgm::addToAllTCAtypes(). It is
  possible to be more fine-grained.

This does not create the corresponding fields in the database. The new
fields must also be defined in the "ext\_tables.sql" file of the
extension::

   CREATE TABLE fe_users (
           tx_examples_options int(11) DEFAULT '0' NOT NULL,
           tx_examples_special varchar(255) DEFAULT '' NOT NULL
   );
   |img-81|

**Caution**

The above statement uses the SQL CREATE TABLE statement. This is the
way TYPO3 expects it to be. The Extension Manager will automatically
transform this into a ALTER TABLE statement when it detects that the
table already exists.

By default new fields are added at the bottom of the form when editing
a record from that table. If the table uses tabs, new fields are added
at the bottom of the "Extended" tab (this tab is created if it does
not exist). The following screenshot shows the placement of the two
new fields when editing a "fe\_users" record:

|img-82| The next example shows how to place a field more precisely.


Example 2: extending the tt\_content table
""""""""""""""""""""""""""""""""""""""""""

In this second example, we will add a "No print" field to all content
element types. First of all, we add its SQL definition in
"ext\_tables.sql"::

   CREATE TABLE tt_content (
           tx_examples_noprint tinyint(4) DEFAULT '0' NOT NULL
   );

Then we add it to the $TCAin "ext\_tables.php"::

   $temporaryColumn = array(
           'tx_examples_noprint' => array (
                   'exclude' => 0,
                   'label' => 'LLL:EXT:examples/locallang_db.xml:tt_content.tx_examples_noprint',
                   'config' => array (
                           'type' => 'check',
                   )
           )
   );
   t3lib_extMgm::addTCAcolumns('tt_content', $temporaryColumn, 1);
   t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', 'tx_examples_noprint', 'after:linkToTop');

The code is mostly the same as in the first example, but the last line
is very different and requires an explanation. Since TYPO3 4.5 the
"pages" and "tt\_content" input forms were totally reorganized for
increased usability. For reasons of flexibility, palettes were used
intensively for all fields and not just for secondary options. This
led to the introduction of new API methods for manipulating the
content of palettes. The syntax is similar to the one we saw in the
first example, but we have to additionally specify the palette's key,
in this case "visibility".

The result is the following:

|img-83| Because we added the field into an existing palette and after a
specific field (as per the "after:linkToTop" directive), it gets added
"inside" the form and not in the "Extended" tab.

Obviously this new field will no magically exclude a content element
from being printed. For it to have any effect, it must be used during
the rendering by modifying the TypoScript used to render the
"tt\_content" table. Although this is outside the scope of this
manual, here is an example of what you could do, for the sake of
showing a complete process.

Assuming you are using "css\_styled\_content" (which is installed by
default), you could add the following TypoScript to your template::

   tt_content.stdWrap.outerWrap = <div class="noprint">|</div>
   tt_content.stdWrap.outerWrap.if.isTrue.field = tx_examples_noprint

This will wrap a "div" tag with a "noprint" class around any content
element that has its "No print" checkbox checked. The final step would
be to declare the appropriate selector in the print-media CSS file so
that "noprint" elements don't get displayed.

This is just an example of how the effect of the "No print" checkbox
can be ultimately implemented. It is meant to show that just adding
the field to the $TCAis not enough.

