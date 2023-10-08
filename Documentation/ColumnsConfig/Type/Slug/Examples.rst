..  include:: /Includes.rst.txt
..  _columns-slug-examples:

========
Examples
========

..  _tca_example_slug_1:

Slug field
==========

This example uses a custom slug prefix hook via
:php:`config['appearance']['prefix']` to adapt the displayed prefix. It takes
the two fields :php:`input_1` and :php:`input_2` into account for generating
the slug.

..  include:: /Images/Rst/Slug1.rst.txt

..  include:: /CodeSnippets/Slug1.rst.txt


..  _tca_example_slug_2:
..  _tca_example_pages_slug:

Another slug field
===================

This example limits the length of the slug to 50 characters. It takes only the
field :php:`input_1` into account for generating the slug.

..  include:: /Images/Rst/Slug2.rst.txt

..  include:: /CodeSnippets/Slug2.rst.txt

