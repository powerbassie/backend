<?php


echo <<< EOD
Single quoted strings will display things almost completely as is. 
Variables and most escape sequences will not be interpreted. The exception is that to display a literal single quote, you can escape it with a back slash \', and to display a back slash, you can escape it with another backslash.
Double quote strings will display a host of escaped characters (including some regexes), and variables in the strings will be evaluated. An important point here is that you can use curly braces to isolate the name of the variable you want evaluated.

EOD;



?>