.. include:: /Includes.rst.txt
.. _columns-group-properties-uploadfolder:

uploadfolder
============

:aspect:`Datatype`
    string

:aspect:`Scope`
    Proc.

:aspect:`Description`
    **Only with internal\_type='db'**

    Path to folder under :php:`\TYPO3\CMS\Core\Core\Environment::getPublicPath()` in which the files are stored, 'uploads/tx_myextension'.

    .. note::
        TYPO3 does NOT create a reference to the file in its original position! It makes a  *copy* of the file into
        this folder and from that moment that file is not supposed to be manipulated from outside. Being in the upload
        folder means that files are understood as a part of the database content and should be managed by TYPO3 only.

    .. warning::
        Do NOT add a trailing slash (/) to the upload folder otherwise the full path stored in the references
        will contain a double slash (e.g. "uploads/pictures//stuff.png").
