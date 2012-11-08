.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Benchmarks on dynamic tables:
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Module
         Module

   tables.php with all configuration
         tables.php with all configuration

   Dynamic loading
         Dynamic loading


.. container:: table-row

   Module


   tables.php with all configuration
         Cache

   Dynamic loading
         No cache

   d
         Cache

   e
         No cache


.. container:: table-row

   Module
         Web>List (loads all)

   tables.php with all configuration
         173 ms

   Dynamic loading
         322 ms

   d
         177 ms

   e
         328 ms


.. container:: table-row

   Module
         Web>Info (loads none)

   tables.php with all configuration
         72 ms

   Dynamic loading
         174 ms

   d
         66 ms

   e
         136 ms


.. ###### END~OF~TABLE ######


Benchmarks on a PIII/500 MHz Linux PHP4.1.2/Apache, 256 MB RAM. PHP-
Cache is PHP-accelerator. All figures are parse times in milliseconds.


**Analysis:**
"""""""""""""

What we see is, when showing a page in Web>List where all tables are
loaded, the dynamic loading of tables includes a little overhead
(177-173=4 ms) regardless of script-caching. This seems fair, probably
due to file operations. It's also evident that the script-caching
boosts the parsing considerably in both cases, saving approximately
150 ms in parse time!

The Web>Info module does not load any tables (at least not in the
mode, this was tested). This is the whole point of all this - that the
full table definitions are loaded only if needed (as they were by the
Web>List module). Again the point of caching is clear. But the main
thing to look at is, that the Web>Info module is loaded in 66/136
seconds (cache/non-cache) with dynamic loading (was later tested to
60/118 ms when tt\_content was not loaded by default) which is LOWER
than if the whole tables.php was included (72/174 ms).

At this point the performance gain is not significant but welcomed.
However the mechanism of dynamic loading of tables provides the basis
for much greater number of tables in TYPO3. Testing 31 duplicates of
the tt\_content table added to the default number of configured tables
(total of 62 tables configured) gave this benchmark:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Module
         Module

   Dynamic loading
         Dynamic loading


.. container:: table-row

   Module


   Dynamic loading
         Cache

   c
         No cache


.. container:: table-row

   Module
         Web>List (loads all)

   Dynamic loading
         580 ms

   c
         1090 ms


.. container:: table-row

   Module
         Web>Info (loads none)

   Dynamic loading
         67 ms

   c
         139 ms


.. ###### END~OF~TABLE ######


This shows once again the work of the caching (1090-580 ms gained by
PHPA) but clearly demonstrates the main objective of dynamic loading;
The Web>Info module is not at all affected by the fact that 31 big
tables has been added.

The serialized size of the $TCA in this case was measured to approx
2MB. The total number of KB in table-definition PHP-files was approx.
1.7 MB.

Extreme tests of this configuration has also been done.

A duplicate of tt\_content was added x number of times and yielded
these results:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Number of tt\_content dupl.
         Number of tt\_content dupl.

   Serialized size of $TCA
         Serialized size of $TCA

   Max size of httpd process (from top)
         Max size of httpd process (from “top”)

   Parse time of the included documents
         Parse time of the included documents


.. container:: table-row

   Number of tt\_content dupl.
         100

   Serialized size of $TCA
         5,9 MB

   Max size of httpd process (from top)
         23 MB

   Parse time of the included documents
         380 ms


.. container:: table-row

   Number of tt\_content dupl.
         250

   Serialized size of $TCA
         14,5 MB

   Max size of httpd process (from top)
         52 MB

   Parse time of the included documents
         12000 ms


.. container:: table-row

   Number of tt\_content dupl.
         500

   Serialized size of $TCA
         28,8 MB

   Max size of httpd process (from top)
         100 MB

   Parse time of the included documents
         x


.. ###### END~OF~TABLE ######


The configuration of tt\_content is approx. 52 kb PHP code. The
testing was done just loading the content into $TCA - no further
processing. However serializing the $TCA array (when that was tested)
gave a double up on the amount of memory the httpd process allocated.
This was to expect of course.

From this table we learn, that PHP does not crash testing this.
However it makes not much sense to use 500 tables of this size. 250
tables might be alright and 100 tables is a more realistic roof over
the number of tables in TYPO3 *of the size of tt\_content!*

Conducting the same experiment with a table configuration of only 8 kb
with 9 fields configured (a reduced configuration for the tt\_content
duplicate - which represents a more typical table) yielded these
results:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Number of tables
         Number of tables

   Serialized size of $TCA
         Serialized size of $TCA

   Max size of httpd process (from top)
         Max size of httpd process (from “top”)

   Parse time of the included documents
         Parse time of the included documents

   Web>List listing
         Web>List listing


.. container:: table-row

   Number of tables
         1

   Serialized size of $TCA
         240 kB

   Max size of httpd process (from top)
         12 MB

   Parse time of the included documents
         0 ms

   Web>List listing
         174 ms (12 MB)


.. container:: table-row

   Number of tables
         100

   Serialized size of $TCA
         1,0 MB

   Max size of httpd process (from top)
         12 MB

   Parse time of the included documents
         77 ms

   Web>List listing
         550 ms (12 MB)


.. container:: table-row

   Number of tables
         250

   Serialized size of $TCA
         2,4 MB

   Max size of httpd process (from top)
         12 MB

   Parse time of the included documents
         200 ms

   Web>List listing
         1050 ms (12 MB)


.. container:: table-row

   Number of tables
         500

   Serialized size of $TCA
         4,7 MB

   Max size of httpd process (from top)
         22 MB

   Parse time of the included documents
         450 ms

   Web>List listing
         1900 ms (20 MB)


.. container:: table-row

   Number of tables
         1000

   Serialized size of $TCA
         9,3 MB

   Max size of httpd process (from top)
         33 MB

   Parse time of the included documents
         900 ms

   Web>List listing
         5000 ms (34 MB)


.. container:: table-row

   Number of tables
         2000

   Serialized size of $TCA
         18,6 MB

   Max size of httpd process (from top)
         51 MB

   Parse time of the included documents
         2000 ms

   Web>List listing
         18000 ms (60 MB)


.. ###### END~OF~TABLE ######


