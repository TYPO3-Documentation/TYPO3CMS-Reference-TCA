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

The main change in TYPO3 CMS 6.1 is the handling of the TCA. The whole notion
of loading only the "ctrl" part and the rest on demand is gone. The TCA
is always entirely loaded both in the frontend and the backend.

It is also now possible to use :ref:`mutliple display conditions <columns>`.


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
