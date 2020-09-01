.. include:: ../../Includes.txt

.. _columns-input-renderType-rsaInput:

================
input (rsaInput)
================

This page describes the :ref:`input <columns-input>` type with renderType='rsaInput'.

If extension `rsaauth` is loaded, this renderType overrides the TCA configuration of table `be_users` and `fe_users`
and adds itself as renderType for the `password` fields. If enabled, the value of fields are not transferred in
plain text to the server, but are encrypted on client side with in a JavaScript library and decrypted on the server
side on save. This can increase security if the backend is not HTTPS enabled, to increase transmission security a bit.

.. note::
    The extension `rsaauth` is just an imperfect helper to secure little parts of the backend. It is clearly
    just a poor-man solution and no good substitution of running the entire backend with HTTPS. If you are
    concerned about communication security (you should!), there is no way around HTTPS. If the backend is forced to
    HTTPS, extension rsaauth can be unloaded.

    Extension `rsaauth` has been deprecated in the core and will be removed any time soon.


.. contents:: Table of contents:
   :local:
   :depth: 1

Example
=======

.. code-block:: php

   'rsainput_1' => [
               'exclude' => 1,
               'label' => 'rsainput_1 description',
               'description' => 'field description',
               'config' => [
                   'type' => 'input',
                   'renderType' => 'rsaInput',
               ],
           ],


Properties
==========

.. contents::
   :local:
   :depth: 1

autocomplete
------------

.. include:: ../Properties/InputAutocomplete.rst.txt

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

eval
----

.. include:: ../Properties/InputEval.rst.txt

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

defaultLanguageDifferences
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt

otherLanguageContent
~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

is\_in
------

.. include:: ../Properties/InputIsIn.rst.txt

max
---

.. include:: ../Properties/InputMax.rst.txt

range
-----

.. include:: ../Properties/InputRange.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

search
------

.. include:: ../Properties/CommonSearch.rst.txt

size
----

.. include:: ../Properties/InputSize.rst.txt

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

