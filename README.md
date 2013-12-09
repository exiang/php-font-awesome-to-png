PHP Font Awesome to PNG
===================

This program allows you to extract the awesome
[Font Awesome] (http://fortawesome.github.com/Font-Awesome/) icons as PNG images
of specified size.

### Usage
To use the program, you need the Font Awesome TTF file & _variables.scss file, which is available in
[Font Awesome Github repository] (https://github.com/FortAwesome/Font-Awesome).



  - download fontawesome and unzip
  - copy scss\_variables.scss over as _variables.scss
  - copy fonts\fontawesome-webfont.ttf over as fontawesome-webfont.ttf 
  - copy configs.php.dist and rename to configs.php
  - edit configs.php to match your environment
  - run generateIconData.php from browser or CLI to generate icons.data.php base on _variables.scss
  - run generate.php to generate png icon images
 

