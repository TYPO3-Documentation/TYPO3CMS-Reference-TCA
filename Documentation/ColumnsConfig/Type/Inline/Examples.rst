..  include:: /Includes.rst.txt
..  _columns-inline-examples:

========
Examples
========

..  note::
    Inline fields should not be used to handle files.  Use the TCA
    column type :ref:`file <columns-file>` instead.

..  _columns-inline-examples-images:
..  _columns-inline-examples-1nrelation:
..  _tca-example-inline-1n-inline-1:

Simple 1:n relation
===================

A conference has talks, and each talk belongs to one conference:

..  figure:: /Images/Conference/InlineTalks.png
    :alt: The talks of a conference
    :class: with-shadow

    The talks of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/120-tx_myextension_conference-talks.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/120-tx_myextension_conference-talks.php
    :emphasize-lines: 11-14

..  _columns-inline-examples-asymmetric-mm:

Attributes on anti-symmetric intermediate table
===============================================

..  figure:: /Images/Conference/InlineRegistrations.png
    :alt: The registrations of a conference
    :class: with-shadow

    The registrations of a conference


This example combines conferences with frontend users, using the
intermediate table `tx_myextension_registration`. Each registration has an
attribute of its own: the ticket of the attendee.

The conference contains the following column:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :emphasize-lines: 12-15

The intermediate table `tx_myextension_registration` defines the following
fields:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_registration.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_registration.php
    :emphasize-lines: 17,20-21,26


..  _columns-inline-examples-symmetric-mm:
..  _tca-example-inline-mn-symmetric-11-branches:

Attributes on symmetric intermediate table
==========================================

..  figure:: /Images/Conference/InlinePartners.png
    :alt: The partner conferences of a conference
    :class: with-shadow

    The partner conferences of a conference


This example combines records of the same table with each other: a
conference has partner conferences, whose attendees get a discount.
Symmetric relations combine records of one table with each other. If
record A is related to record B, then record B is also related to record A.
However, the records are not stored in groups. If record A is related to B
and C, B does not have to be related to C.

The conference has a field storing the inline relation, here: `partners`.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/128-tx_myextension_conference-partners.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/128-tx_myextension_conference-partners.php
    :emphasize-lines: 13-18

The conferences are related to each other with the intermediate table
`tx_myextension_partnership`. It stores the uids of both sides of the
relation in `conference` and `partner`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_partnership.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_partnership.php
    :emphasize-lines: 15,24

Each side of the relation has its own sorting. TYPO3 does not create the
columns of `foreign_sortby` and `symmetric_sortby`, so they are defined in
the :file:`ext_tables.sql` file:

..  literalinclude:: /CodeSnippets/my_extension/ext_tables.sql
    :caption: EXT:my_extension/ext_tables.sql
    :language: sql
    :visible-lines: 1-6

..  note::
    :typoscript:`TCAdefaults.<table>.pid = <page id>` can be used to define the pid of new child records. Thus, it's possible to
    have special storage folders on a per-table-basis. See the :ref:`TSconfig reference <t3tsref:usertoplevelobjects>`.

..  _tca-example-inline-usecombinationc-inline-1:

With a combination box
======================

The registrations of a conference show the registration and the frontend
user together. A message warns that changes to the frontend user apply to
all registrations of this user:

..  figure:: /Images/Conference/InlineRegistrationCombination.png
    :alt: A registration with its frontend user
    :class: with-shadow

    A registration with its frontend user

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :emphasize-lines: 19-22

..  _inline-example-field-information:

Add a custom fieldInformation
=============================

The following example adds a custom fieldInformation above the talks of a
conference. Adding a fieldWizard is done in a similar way.

..  figure:: /Images/Conference/InlineTalks.png
    :alt: The talks of a conference with the information about their order
    :class: with-shadow

    The talks of a conference with the information about their order


As explained in the :ref:`description <columns-inline>`, `fieldInformation`
or `fieldWizard` must be configured within the `ctrl` **for the field
type inline** - as it is a container.

..  rst-class:: bignums-xxl

#.  Create a custom fieldInformation

    ..  literalinclude:: /CodeSnippets/my_extension/Classes/Form/FieldInformation/TalkOrderInformation.php
        :caption: EXT:my_extension/Classes/Form/FieldInformation/TalkOrderInformation.php

#.  Register this node type

    ..  literalinclude:: /CodeSnippets/my_extension/ext_localconf.php
        :caption: EXT:my_extension/ext_localconf.php
        :emphasize-lines: 24-28

#.  Add the fieldInformation to the container for containerRenderType inline

    ..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/120-tx_myextension_conference-talks.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/120-tx_myextension_conference-talks.php
        :emphasize-lines: 34-37

..  seealso::

    *   :ref:`['ctrl']['container'] <ctrl-reference-container>`
    *   How to create custom fieldInformation, fieldControl or fieldWizard in
        :ref:`FormEngine <t3coreapi:FormEngine-Rendering-NodeExpansion>` chapter (TYPO3
        Explained)
    *   :ref:`fieldInformation <tca-property-fieldinformation>` property

..  _columns-inline-properties-overridechildtca-examples:

Examples with overrideChildTca
==============================

..  _columns-inline-properties-override-child-tca-examples-overrides-crop:

Overrides the crop variants
---------------------------

This example overrides the crop variants of the photo of a speaker. The
photo can only be cropped to a square:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/320-tx_myextension_speaker-photo.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/320-tx_myextension_speaker-photo.php
    :emphasize-lines: 15-40

..  _columns-inline-properties-override-child-tca-examples-define-fields:

Define which fields to show in the child table
----------------------------------------------

This example overrides the :ref:`showitem <types-properties-showitem>` field of
the child table TCA:

..  figure:: /Images/Conference/InlineContentElements.png
    :alt: The content elements of a conference
    :class: with-shadow

    The content elements of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/159-tx_myextension_conference-content_elements.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/159-tx_myextension_conference-content_elements.php
    :emphasize-lines: 25-29

..  _columns-inline-properties-override-child-tca-examples-override-default:

Override the default value of a child tables field
--------------------------------------------------

This overrides the `default` columns property of a child field in an inline relation from within
the parent if a new child is created:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/159-tx_myextension_conference-content_elements.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/159-tx_myextension_conference-content_elements.php
    :emphasize-lines: 19-23

..  _columns-inline-properties-override-child-tca-examples-override-foreign:

Override the foreign_selector field target
------------------------------------------

This overrides the configuration of the field the
:ref:`foreign_selector <columns-inline-properties-foreign-selector>` property
points to. Here, the element browser of the attendees of a conference opens on
the folder of the conference:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/126-tx_myextension_conference-registrations.php
    :emphasize-lines: 23-34

..  note::
    It is allowed to use this property within the :ref:`columnsOverrides property <types-properties-columnsoverrides>`
    of an inline parent in the `['types']` section.

..  _columns-inline-properties-override-child-tca-examples-example-override:

Example: Override by type
-------------------------

A record type can change the `overrideChildTca` of an inline field with
:ref:`columnsOverrides <types-properties-columnsoverrides>`. Here, the
content elements of a record type `gallery` are of the type `textmedia` by
default:

..  code-block:: php

    'types' => [
        'gallery' => [
            'showitem' => 'title, content_elements',
            'columnsOverrides' => [
                'content_elements' => [
                    'config' => [
                        'overrideChildTca' => [
                            'columns' => [
                                'CType' => [
                                    'config' => [
                                        'default' => 'textmedia',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
