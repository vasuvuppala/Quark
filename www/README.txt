
This directory contains source for the Quark website

Directory Structure:

         ap: list of EE-supported applications
        art: artwork used in Quark
 checklists:
     images:
        lib: common PHP routines
        ref: Reference documents
  standards: 
     status: status of the project
        tpl: templates

Document structure:

  All web-pages in Quark follow the same structure. There are four rectangular areas in each page: 
  Header, Footer, Left-menu Area, and Content Area. The Content Area contains the main content of
  the page. The header, footer, and left-menu areas are always the same; only the content area 
  changes. Hence the file for a web-page has the following template:
 
     1. includes qheader.php which generates the header and the left menu
     2. HTML/PHP fragment for the Content Area
     3. includes qfooter.php which generates the footer

File Naming Convention:

  All procedures begin with 'proc-'.
  All guidelines begin with 'gl-'

Miscellaneous:
   
  All styling is done through quark.css.
  The routines to generate random quotes and artwork are in "lib/quarklib.php".
