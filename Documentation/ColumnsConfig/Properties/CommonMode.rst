mode
~~~~

:aspect:`Datatype`
    string (keywords)

:aspect:`Scope`
    Display

:aspect:`Description`
    Possible keywords: :code:`useOrOverridePlaceholder`

   This property is related to the placeholder property. When defined a checkbox will appear above the field. If that
   box is checked, the field can be used to enter whatever the user wants as usual. If the box is **not** checked, the
   field becomes read-only and the value saved to the database will be :code:`NULL`.

   What impact this has in the frontend depends on what is done in the code using this field. In the case of
   FAL relations, for example, if the "title" field has its box checked, the "title" from the
   related metadata will be provided.

   This is how the mode checkbox appears in the TYPO3 CMS backend:

   .. figure:: ../../Images/OverridePlaceholder.png
        :alt: Several fields with their placeholder override checkboxes

        Several fields with their placeholder override checkboxes

   .. warning::
      In order for this property to apply properly, the field must be allowed to use "NULL" as a value,
      the "eval" property must list "null" as a possible evaluation.
