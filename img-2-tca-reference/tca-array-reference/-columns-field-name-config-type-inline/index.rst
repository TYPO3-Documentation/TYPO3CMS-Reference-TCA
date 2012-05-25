.. include:: images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


['columns'][ *field name* ]['config'] / TYPE: "inline"
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Inline-Relational-Record-Editing (IRRE) offers a way of directly
editing parent-child-relations in one backend view. New child records
are created using AJAX calls to prevent a reload of the complete
backend view. This type was first integrated in TYPO3 4.1.

|img-51| Please note that IRRE does not fully work in conjunction with
versioning. Only 1:n relationships are supported in workspaces (since
TYPO3 4.5).

|img-52| **Note**

TCAdefaults.<table>.pid = <page id>can be used to define the pid of
new child records. Thus, it's possible to have special storage folders
on a per-table-basis.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key
   
   Datatype
         Datatype
   
   Description
         Description
   
   Scope
         Scope


.. container:: table-row

   Key
         type
   
   Datatype
         string
   
   Description
         *[Must be set to "inline"]*
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_table
   
   Datatype
         string
         
         (table name)
   
   Description
         *[Must be set, there is no type “inline” without a foreign table]* The
         table name of the child records is defined here. The table must be
         configured in $TCA.
         
         See the other related options below.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         appearance
   
   Datatype
         array
   
   Description
         Has information about the appearance of child-records, namely:
         
         - collapseAll (boolean)Show all child-records collapsed (if false, all
           are expanded)
         
         - *expandSingle* (boolean)Show only one child-record expanded each time.
           If a collapsed record is clicked, the currently open one collapses and
           the clicked one expands.
         
         - *newRecordLinkAddTitle* (boolean)Adds the title of the foreign\_table
           to the “New record” link.false: “Create new”true: “Create new <title
           of foreign\_table>”, e.g. “Create new address”
         
         - *newRecordLinkPosition* (string) **Deprecated** : use
           *levelLinksPosition* instead
         
         - *levelLinksPosition* (string)Values: 'top', 'bottom', 'both', 'none' –
           default: 'top'Defines where to show the “New record” link in relation
           to the child records.
         
         - *useCombination* (boolean)This is only useful on bidirectional
           relations using an intermediate table with attributes. In a
           “combination” it is possible to edit the attributes AND the related
           child record itself.If using a foreign\_selector in such a case, the
           foreign\_unique property  **must** be set to the same field as the
           foreign\_selector.
         
         - *useSortable* (boolean)Active Drag&Drop Sorting by the script.aculo.us
           Sortable object.
         
         - *showPossibleLocalizationRecords* (boolean)Show unlocalized records
           which are in the original language, but not yet localized.
         
         - *showRemovedLocalizationRecords* (boolean)Show records which were once
           localized but do not exist in the original language anymore.
         
         - *showAllLocalizationLink* (boolean)Defines whether to show the
           "localize all records" link to fetch untranslated records from the
           original language.
         
         - *showSynchronizationLink* (boolean)Defines whether to show a
           "synchronize" link to update to a 1:1 translation with the original
           language.
         
         - *enabledControls* (array)Associative array with the keys 'info',
           'new', 'dragdrop', 'sort', 'hide', 'delete', 'localize'. If the
           accordant values are set to a boolean value (true or false), the
           control is shown or hidden in the header of each record.
         
         - *showPossibleRecordsSelector* (boolean) (since TYPO3 4.7)Can be used
           to hide the foreign record selector from the interface, even if you
           have a foreign\_selector configured. This can be used to keep the
           technical functionality of the foreign\_selector but is useful if you
           want to replace it with your own implementation using a custom control
           (see "customControls").
   
   Scope
         Display


.. container:: table-row

   Key
         behaviour
   
   Datatype
         array
   
   Description
         Has information about the behavior of child-records, namely:
         
         - *localizationMode* ('keep', 'select')Defines in general whether
           children are really localizable (set to 'select') or just taken from
           the default language (set to 'keep'). If this property is not set, but
           the affected parent and child tables were localizable, the mode
           'select' is used by default.
         
         - Mode 'keep': This is not a real localization, since the children are
           taken from the parent of the original language. But the children can
           be moved, deleted, modified etc. on the localized parent which - of
           course - also affects the original language.
         
         - Mode 'select': This mode provides the possibility to have a selective
           localization and to compare localized data to the pendants of the
           original language. Furthermore this mode is extended by a 'localize
           all' feature, which works similar to the localization of content on
           pages, and a 'synchronize' feature which offers the possibility to
           synchronize a localization with its original language.
         
         - *localizeChildrenAtParentLocalization* (boolean)Defines whether
           children should be localized when the localization of the parent gets
           created.
         
         - *disableMovingChildrenWithParent* (boolean)Disables that child records
           get moved along with their parent records.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         customControls
   
   Datatype
         array
   
   Description
         (Since TYPO3 4.7) Numerical array containing definitions of custom
         header controls for IRRE fields. This makes it possible to create
         special controls by calling user-defined functions (userFuncs). Each
         item in the array item must be an array itself, with at least on key
         "userFunc" pointing to the user function to call.
         
         The userFunc string is defined as usual in TYPO3 as [file-
         reference":"]["&"]class/function["->"method-name], e.g.
         
         ::
         
            EXT:myext/class.tx_myext_myclass:tx_myext_myclass->myUserFuncMethod
         
         For more details, see the implementation in
         "t3lib/class.t3lib\_tceforms\_inline.php" and search for
         "customControls".
   
   Scope
         Display


.. container:: table-row

   Key
         foreign\_field
   
   Datatype
         string
   
   Description
         The foreign\_field is the field of the child record pointing to the
         parent record. This defines where to store the uid of the parent
         record.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_label
   
   Datatype
         string
   
   Description
         If set, it overrides the label set in
         $TCA[<foreign\_table>]['ctrl']['label'] for the inline-view.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_selector
   
   Datatype
         string
   
   Description
         A selector is used to show all possible child records that could be
         used to create a relation with the parent record. It will be rendered
         as a multi-select-box. On clicking on an item inside the selector a
         new relation is created.The foreign\_selector points to a field of the
         foreign\_table that is responsible for providing a selector-box – this
         field on the foreign\_table usually has the type “select” and also has
         a “foreign\_table” defined.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_sortby
   
   Datatype
         string
   
   Description
         Define a field on the child record (or on the intermediate table) that
         stores the manual sorting information. It is possible to have a
         different sorting, depending from which side of the relation we look
         at parent or child.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_default\_sortby
   
   Datatype
         string
   
   Description
         If a field name for  *foreign\_sortby* is defined, then this is
         ignored.
         
         Otherwise this is used as the “ORDER BY” statement to sort the records
         in the table when listed.
   
   Scope
         Display


.. container:: table-row

   Key
         foreign\_table\_field
   
   Datatype
         string
   
   Description
         The  *foreign\_table\_field* is the field of the child record pointing
         to the parent record. This defines where to store the table name of
         the parent record. On setting this configuration key together with
         *foreign\_field* , the child record knows what its parent record is –
         so the child record could also be used on other parent tables.This
         issue is also known as “weak entity”.Do not confuse with
         *foreign\_table* or  *foreign\_field* . It has its own behavior.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         foreign\_unique
   
   Datatype
         string
   
   Description
         Field which must be unique for all children of a parent record.
         
         Example: Say you have two tables, products, your parent table, and
         prices, your child table (products) can have multiple prices. The
         prices table has a field called customer\_group, which is a selector
         box. Now you want to be able to specify prices for each customer group
         when you edit a product, but of course you don't want to specify
         contradicting prices for one product (i.e. two different prices for
         the same customer\_group). That's why you would set foreign\_unique to
         the field name “customer\_group”, to prevent that two prices for the
         same customer group can be created for one product.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         MM
   
   Datatype
         string
         
         (table name)
   
   Description
         Means that the relation to the records of "foreign\_table" is done
         with a M-M relation with a third "join" table.
         
         That table typically has three columns:
         
         - *uid\_local, uid\_foreign* for uids respectively.
         
         - *sorting* is a required field used for ordering the items.
         
         The field which is configured as “inline” is not used for data-storage
         any more but rather it's set to the number of records in the relation
         on each update, so the field should be an integer.
         
         Notice: Using MM relations you can ONLY store real relations for
         foreign tables in the list - no additional string values or non-record
         values (so no attributes).
   
   Scope
         Proc.


.. container:: table-row

   Key
         foreign\_table\_match
   
   Datatype
         array
   
   Description
         (Since TYPO3 4.7) Array of field-value pairs to both insert and match
         against when writing/reading IRRE relations. Using the match fields,
         it is possible to re-use the same child table in more than one field
         of the parent table by using a match field with different values for
         each of the use cases.
         
         **Example**
         
         Imagine you have a parent table called "company" and a child table
         called "persons". Now, if you want the company table to have two
         fields of type "inline", one called "employees" and one called
         "customers", both containing "persons". Then you could use a (hidden)
         field called "role" on the child (person) table to keep them apart.
         The match TCA configuration of the parent table would then look like
         this:
         
         ::
         
            $TCA['ty_myext_company'] = array (
                    ...
                    'columns' => array (
                            ...
                            'employees' => array (
                                    'config' => array (
                                            'type' => 'inline',
                                            'foreign_table' => 'ty_myext_person',
                                            'foreign_field' => 'company',
                                            'foreign_match_fields' => array(
                                                    'role' => 'employee',
                                            ),
                                    ),
                            ),
                            'customers' => array (
                                    'config' => array (
                                            'type' => 'inline',
                                            'foreign_table' => 'ty_myext_person',
                                            'foreign_field' => 'company',
                                            'foreign_match_fields' => array(
                                                    'role' => 'customer',
                                            ),
                                    ),
                            ),
                    ),
                    ...
            );
   
   Scope
         Proc.


.. container:: table-row

   Key
         foreign\_types
   
   Datatype
         array
   
   Description
         (Since TYPO3 4.7) This can be used to control which fields of the
         child table are displayed. You can override the "showitem", etc.
         settings of the child table here, by supplying an override for the
         "types" array of that table. For details on how the types array is
         constructed, see the chapter "['types'][key] section" later in this
         manual.
   
   Scope
         Display


.. container:: table-row

   Key
         size
   
   Datatype
         integer
   
   Description
         Height of the selector box in TCEforms.
   
   Scope
         Display


.. container:: table-row

   Key
         autoSizeMax
   
   Datatype
         integer
   
   Description
         If set, then the height of multiple-item selector boxes (maxitem > 1)
         will automatically be adjusted to the number of selected elements,
         however never less than "size" and never larger than the integer value
         of "autoSizeMax" itself (takes precedence over "size"). So
         "autoSizeMax" is the maximum height the selector can ever reach.
   
   Scope
         Display


.. container:: table-row

   Key
         maxitems
   
   Datatype
         integer > 0
   
   Description
         Maximum number of items in the selector box. Defaults to 100000. Note
         that this is different from types "select" and "group" which default
         to 1.
   
   Scope
         Display / Proc


.. container:: table-row

   Key
         minitems
   
   Datatype
         integer > 0
   
   Description
         Minimum number of items in the selector box. (Default = 0)
   
   Scope
         Display


.. container:: table-row

   Key
         symmetric\_field
   
   Datatype
         string
   
   Description
         This works like foreign\_field, but in case of using bidirectional
         symmetric relations. symmetric\_field defines in which field on the
         foreign\_table the uid of the “other” parent is stored.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         symmetric\_label
   
   Datatype
         string
   
   Description
         If set, it overrides the label set in
         $TCA[<foreign\_table>]['ctrl']['label'] for the inline-view and only
         if looking to a symmetric relation from the “other” side.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         symmetric\_sortby
   
   Datatype
         string
   
   Description
         This works like foreign\_sortby, but in case of using bidirectional
         symmetric relations. Each side of a symmetric relation could have its
         own sorting, so symmetric\_sortby defines a field on the
         foreign\_table where the sorting of the “other” side is stored.
   
   Scope
         Display / Proc.


.. ###### END~OF~TABLE ######


((generated))
"""""""""""""

Example “comma-separated list”:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This combines companies with persons (employees) using a comma
separated list, so no “foreign\_field” is used here.

::

   $TCA['company'] = array(
     'ctrl' => ...,
     'interface' => ...,
     'feInterface' => ...,
     'columns' => array(
       'hidden' => ...,
       'employees' => array(
         'exclude' => 1,
         'label' => 'LLL:EXT:myextension/locallang_db.xml:company.employees',
         'config' => array(
           'type' => 'inline',
           'foreign_table' => 'person',
           'maxitems' => 10,
           'appearance' => array(
             'collapseAll' => 1,
             'expandSingle' => 1,
           ),
         ),
       ),
     ),
     'types' => ...
     'palettes' => ...
   );


Example “attributes on anti-symmetric intermediate table”:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This example combines companies with persons (employees) using an
intermediate table. It is also possible to add attributes to every
relation – in this example, an attribute “jobtype” on the
“person\_company” table is defined. It is also possible to look at the
relation from both sides (parent and child).

::

   $TCA['person'] = array(
     'columns' => array(
       'employers' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person.employers',
         'config' => array(
           'type' => 'inline',
           'foreign_table' => 'person_company',
           'foreign_field' => 'person',
           'foreign_label' => 'company',
         ),
       ),
     ),
   );
   $TCA['company'] = array(
     'columns' => array(
       'employees' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:company.employees',
         'config' => array(
           'type' => 'inline',
           'foreign_table' => 'person_company',
           'foreign_field' => 'company',
           'foreign_label' => 'person',
         ),
       ),
     ),
   );
   $TCA['person_company'] = array(
    'columns' => array(
    'person' => array(
    'label' => 'LLL:EXT:myextension/locallang_db.xml:person_company.person',
    'config' => array(
    'type' => 'select',
    'foreign_table' => 'person',
    'size' => 1,
    'minitems' => 0,
    'maxitems' => 1,
    ),
    ),
    'company' => array(
    'label' => 'LLL:EXT:myextension/locallang_db.xml:person_company.company',
    'config' => array(
    'type' => 'select',
    'foreign_table' => 'company',
    'size' => 1,
    'minitems' => 0,
    'maxitems' => 1,
    ),
    ),
       'jobtype' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person_company.jobtype',
         'config' => array(
           'type' => 'select',
           'items' => array(
             array('Project Manager (PM)', '0'),
             array('Chief Executive Officer (CEO)', '1'),
             array('Chief Technology Officer (CTO)', '2'),
           ),
           'size' => 1,
           'maxitems' => 1,
         ),
       ),
     ),
   );


Example “attributes on symmetric intermediate table”:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This example combines two persons with each other – imagine they are
married. One person on the first side is the husband, and one person
on the other side is the wife (or generally “spouse” in the example
below). Symmetric relations combine object of the same with each other
and it does not depend, from which side someone is looking to the
relation – so the husband knows it's wife and the wife also know it's
husband.

Sorting could be individually defined for each of the both sides
(perhaps this should not be applied to a wife-husband-relationship in
real life).

::

   $TCA['person'] = array(
     'columns' => array(
       'employers' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person.employers',
         'config' => array(
           'type' => 'inline',
           'foreign_table' => 'person_symmetric',
           'foreign_field' => 'person',
           'foreign_sortby' => 'sorting_person',
           'foreign_label' => 'spouse',
           'symmetric_field' => 'spouse',
           'symmetric_sortby' => 'sorting_spouse',
           'symmetric_label' => 'person',
         ),
       ),
     ),
   );
   $TCA['person_symmetric'] = array(
     'columns' => array(
       'person' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person_symmetric.person',
         'config' => array(
           'type' => 'select',
           'foreign_table' => 'person',
           'size' => 1,
           'minitems' => 0,
           'maxitems' => 1,
         ),
       ),
       'spouse' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person_symmetric.spouse',
         'config' => array(
           'type' => 'select',
           'foreign_table' => 'person',
           'size' => 1,
           'minitems' => 0,
           'maxitems' => 1,
         ),
       ),
       'someattribute' => array(
         'label' => 'LLL:EXT:myextension/locallang_db.xml:person_symmetric.someattribute',
         'config' => array(
           'type' => 'input',
         ),
       ),
       'sorting_person' => array(
         'config' => array(
           'type' => 'passthrough',
         ),
       ),
       'sorting_spouse' => array(
         'config' => array(
           'type' => 'passthrough',
         ),
       ),
     ),
   );

