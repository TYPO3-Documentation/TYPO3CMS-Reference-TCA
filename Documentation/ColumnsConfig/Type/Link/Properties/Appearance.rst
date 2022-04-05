.. include:: /Includes.rst.txt
.. _columns-link-properties-appearance:

==========
appearance
==========

.. confval:: appearance ('type' => 'link')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display

   Has information about the appearance of child-records, namely:

   allowedOptions (array)
      Hide or show :confval:`allowedTypes` in the link browser.
      While :php:`appearance[allowedOptions]` only affects the display in
      link browser the :confval:`allowedTypes` configuration is also evaluated
      in the :php:`Datahandler`, preventing the user from adding
      links of non allowed types.
