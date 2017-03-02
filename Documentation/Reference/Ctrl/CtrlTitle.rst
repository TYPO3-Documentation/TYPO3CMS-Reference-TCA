.. include:: ../../Includes.txt

title
~~~~~

.. container:: table-row

   Key
         title

   Datatype
         string or LLL reference

   Description
         Contains the *system name* of the table. Is used for display in the
         backend.

         For instance the "tt\_content" table is of course named "tt\_content"
         technically. However in the backend display it will be shown as
         "Page Content" when the backend language is English. When another
         language is chosen, like Danish, then the label "Sideindhold" is shown
         instead. This value is managed by the "title" value.

         You can insert plain text values, but the preferred way is to enter a
         reference to a localized string. See the :ref:`examples <ctrl-examples>`. Refer to the
         Localization section in :ref:`Inside TYPO3 <t3inside:start>`.
         for more details.

         **Example:**

         For table "sys\_template".

         .. code-block:: php

            'ctrl' => array(
            	'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_template',

         In the above example the :code:`LLL:` prefix tells the system to look up a
         label from a localized file. The next prefix code:`EXT:cms` will look for
         the data in the extension with the key "cms". In that extension the
         file :file:`locallang_tca.xlf` contains a XML structure inside of which one
         label tag has an index attribute named "sys\_template". This tag
         contains the value to display in the default language. Other languages
         are provided by the language packs.

   Scope
         Display

