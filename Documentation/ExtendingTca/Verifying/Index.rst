.. include:: /Includes.rst.txt


.. _verifying:

Verifying the $TCA
^^^^^^^^^^^^^^^^^^

.. note::

   This page is for an outdated TYPO3 version (7.6). For newer versions, you
   can find the information in:

   *  TYPO3 Explained: :ref:`t3coreapi:extending-tca` (7.6)

You may find it necessary – at some point – to verify the full
structure of the :code:`$TCA` in your TYPO3 installation. The System >
Configuration module makes it possible to have an overview of the
complete :code:`$TCA`, with all customizations taken into account.

.. figure:: ../../Images/VerifyingTca.png
   :alt: The Configuration module

   Checking the existence of the new field via the Configuration module

If you cannot find your new field, it probably means that you have
made some mistake.

This view is also useful when trying to find out where to insert a new
field, to explore the combination of types and palettes that may be
used for the table that we want to extend.

