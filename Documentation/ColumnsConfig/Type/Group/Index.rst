..  include:: /Includes.rst.txt
..  _columns-group:
..  _columns-group-introduction:

============
Group fields
============

..  versionadded:: 13.0
     When using the `group` type, TYPO3 takes care of
     :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
     A developer does not need to define this field in an extension's
     :file:`ext_tables.sql` file.

The group element (:php:`type' => 'group'`) in TYPO3 makes it possible to create references from a record of one table to many records from multiple tables in the system. The foreign tables can be the table itself (thus a self-reference) or any other table.
This is especially useful (compared to the "select" type) when records are scattered over the page tree and require
the Element Browser to select records for adding them to the group field.

For database relations however, the group field is the right and powerful choice, especially if dealing
with lots of re-usable child records, and if :ref:`type='inline' <columns-inline>` is not suitable.

This type is very flexible in its display options with all its different
:ref:`fieldControl <columns-group-properties-fieldControl>` and
:ref:`fieldWizard <tca_property_fieldWizard>` options. A lot of them are available by default, however they must be enabled: :php:`'disabled' => 'false'`

Most common usage is to model database relations (n:1 or n:m).
The property :ref:`allowed <columns-group-properties-allowed>` is required, to
define allowed relation tables.

The group field uses either the CSV format to store uids of related records or an intermediate mm table
(in this case :ref:`MM <columns-group-properties-mm>` property is required).

You can read more on how data is structured in :ref:`columns-group-data` chapter.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents::

..  toctree::
    :titlesonly:

    Examples
    StoredDataValues


..  _columns-group-record-objects:

Group properties in record objects
==================================

..  versionadded:: 13.3

..  _columns-group-record-objects-many-to-many:

Many to many relationships in a group field
-------------------------------------------

If option `relationship <https://docs.typo3.org/permalink/t3tca:confval-category-relationship>`_
is set to `manyToMany` (default) the `record object <https://docs.typo3.org/permalink/t3coreapi:record-objects>`_
provides a collection (:php-short:`\TYPO3\CMS\Core\Collection\LazyRecordCollection`)
of :php-short:`\TYPO3\CMS\Core\Domain\Record` objects, where each represents a
record of the target table.

..  tabs::

    ..  group-tab:: UML

        ..  uml:: _codesnippets/_many_to_many.plantuml
            :caption: Students know which courses they are in

    ..  group-tab:: Fluid

        The group fields can then be displayed like this in Fluid:

        ..  code-block:: html
            :caption: Displaying a `manyToMany` relationship to courses in Fluid

            <ul>
                <f:for each="{student.courses}" as="course">
                    <li>{course.title}: ({course.code}), {course.credits}</li>
                </f:for>
            </ul>

    ..  group-tab:: TCA

        ..  literalinclude:: _codesnippets/_relationship-many-to-many.php

The relationship in the above example is uni-directional: While students knows
about their courses, the course would not know which or how many students
use it

In order to have a true bi-directional many-to-many relationship, table "myitem"
also need a field pointing to "mytable" and that field must also have the
relationship many-to-many. Then you can use the option
`MM_opposite_field  <https://docs.typo3.org/permalink/t3tca:confval-group-mm-opposite-field>`_
to point from "mytable" to the field in "myitem". If both fields use the same
`MM  <https://docs.typo3.org/permalink/t3tca:confval-group-mm>`_ table changing
the relationship on one side also changes the relationship on the other side.

..  _columns-group-record-objects-many-to-one:

Many to one relationships in a group field
------------------------------------------

If option `relationship <https://docs.typo3.org/permalink/t3tca:confval-category-relationship>`_
is set `manyToMOne` or `oneToOne`, the property represents a
:php-short:`\TYPO3\CMS\Core\Domain\Record` object directly, so it can be output
like

..  tabs::

    ..  group-tab:: UML

        ..  uml:: _codesnippets/_many_to_one.plantuml
            :caption: Each Course has one Teacher

    ..  group-tab:: Fluid

        The group field can then be displayed like this in Fluid (single record, no loop):

        ..  code-block:: html
            :caption: Displaying a single `teacher` record in Fluid

            Teacher: {course.teacher.name}

    ..  group-tab:: TCA

        ..  literalinclude:: _codesnippets/_relationship-many-to-one.php

This example is unidirectional: While the course has a teacher assigned, the
teacher does not know which courses they are teaching.

..  _columns-group-properties:
..  _columns-group-properties-type:

Properties of the TCA column type `group`
=========================================

..  confval-menu::
    :name: group
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
