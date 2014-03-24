.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _introduction:

Introduction
------------


.. _about:

About this document
^^^^^^^^^^^^^^^^^^^

This document aims to describe the global array called :code:`$TCA`. This
array describes the database tables that TYPO3 can operate on. It is a
very central element of the TYPO3 architecture.

Almost all code examples used in this manual come either from the TYPO3
source code itself or from the extension "examples", which can be
downloaded from the TER.

This document used to be a chapter inside :ref:`TYPO3 Core APIs <t3api:start>`.


.. _new:

What's new
^^^^^^^^^^

This version is updated for TYPO3 CMS 6.2. Here is a highlight of the
main changes:

- there's a new way to :ref:`register wizards <wizards-configuration>`,
  which provides CSRF protection.

- it's possible to :ref:`add a filter <columns-select-properties-enablemultiselectfiltertextfield>`
  to select-type fields.

- :ref:`display conditions <columns-properties-displaycond>` have now bit operators.

- take a deep look at the :ref:`inline-type fields (IRRE) <columns-inline>`
  which received many new properties, mostly related to the development of FAL.

- the placeholder property (actually introduced in TYPO3 CMS 4.7,
  but missing from the documentation) has improved capabilities. It is
  available for :ref:`input-type fields <columns-input-properties-placeholder>`
  and :ref:`text-type fields <columns-text-properties-placeholder>`.


.. _credits:

Credits
^^^^^^^

The original reference to the TCA was written by Kasper Skårhøj. This
version has been updated by François Suter.


.. _feedback:

Feedback
^^^^^^^^

For general questions about the documentation get in touch by writing
to `documentation@typo3.org <mailto:documentation@typo3.org>`_ .

If you find a bug in this manual, please file an issue in this
manual's bug tracker:
http://forge.typo3.org/projects/typo3cms-doc-tca/issues

Maintaining quality documentation is hard work and the Documentation
Team is always looking for volunteers. If you feel like helping please
join the documentation mailing list (typo3.projects.documentation on
lists.typo3.org).
