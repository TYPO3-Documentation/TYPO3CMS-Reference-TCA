.. include:: /Includes.rst.txt
.. _columns-link-properties-appearance:

==========
appearance
==========

.. confval:: appearance ('type' => 'link')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display

   Has information about the appearance, namely:

   allowedOptions (array)
      .. versionadded:: 12.0
         Formerly known as `blindLinkFields` of `linkPopup.options`, which was a deny-list.
         Now this is an include-list.

      Display certain options in the link browser.
      To allow all options in the Link Browser, skip this configuration or set
      it to :php:`['*']`. To deny all options in the Link Browser, set this
      configuration to :php:`[]` (empty :php:`array`).

      class
         Custom CSS classes for the link

      params
         Additional link parameters

      target
         Either empty, `_top` or `_blank`

      title
         The `title` attribute of the link

      rel
         The link relationship. Only available for RTE enabled fields and if `buttons.link.relAttribute.enabled`
         is enabled in the RTE YAML configuration.

      .. code-block:: php

         // Display only 'class' and 'params'
         'appearance' => [
            'allowedOptions' => ['class', 'params'],
         ],

      .. code-block:: php

         // Allow all options (or skip this option).
         'appearance' => [
            'allowedOptions' => ['*'],
         ],

      .. code-block:: php

         // Deny all options
         'appearance' => [
            'allowedOptions' => [],
         ],

   allowedExtensions (array)
      .. versionadded:: 12.0
         Formerly known as `allowedExtensions` of `linkPopup.options`.

      An array of allowed file extensions. To allow all extensions, skip this
      configuration or set it to :php:`['*']`. It's not possible to deny all
      extensions.

      .. code-block:: php

         // Allow only jpg and png file extensions
         'appearance' => [
            'allowedOptions' => ['jpg', 'png'],
         ],

      .. code-block:: php

         // Allow all file extensions (or skip this option).
         'appearance' => [
            'allowedOptions' => ['*'],
         ],


   browserTitle (string, LLL)
      .. versionadded:: 12.0
         Formerly known as `title` of `linkPopup.options`.

      Allows to set a different `title` attribute for the Link Browser icon, defaults to `Link`.

   enableBrowser (boolean)
      .. versionadded:: 12.0
         Formerly known as `disabled` of `linkPopup`.

      To disable the Link Browser altogether, the this option to :php:`false`.
