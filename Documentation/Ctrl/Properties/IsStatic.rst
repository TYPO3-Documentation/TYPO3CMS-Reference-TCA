.. include:: /Includes.rst.txt
.. _ctrl-reference-is-static:

==========
is\_static
==========

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Used by import/export

:aspect:`Description`
    This marks a table to be "static".

    A "static table" means that it should not be updated for individual
    databases because it is meant to be centrally updated and distributed.
    For instance static tables could contain country-codes used in many
    systems.

    The foremost property of a static table is that the uid's used are the
    SAME across systems. Import/Export of records expect static records to
    be common for two systems.
