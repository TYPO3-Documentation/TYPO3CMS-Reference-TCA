.. include:: /Includes.rst.txt
.. _ctrl-reference-security:
.. _ctrl-security:
.. _ctrl-security-ignorewebmountrestriction:
.. _ctrl-security-ignorerootlevelrestriction:

========
security
========

.. confval:: security

   :type: array
   :Scope: Display


   Array of sub-properties. This is used in the core for the "sys\_file" table:

   .. code-block:: php

      $GLOBALS['TCA']['sys_file'] = [
         'ctrl' => [
            'security' => [
               'ignoreWebMountRestriction' => true,
               'ignoreRootLevelRestriction' => true,
            ],
            ...
         ],
      ];

   ignoreWebMountRestriction
      Allows users to access records that are not in their defined web-mount,
      thus bypassing this restriction.

   ignoreRootLevelRestriction
      Allows non-admin users to access records that on the root-level (page-id 0),
      thus bypassing this usual restriction.
