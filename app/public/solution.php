<?php
   $results = array();
   $results[] = 9 + ( 2 * 5 ) - 11; //8
   $results[] = 18 / ( ( 3 * 6 ) - 9 ) * 3; //6
   $results[] = 3 * ( ( 24 / 2) - ( 3 * 4 ) * ( 2 * 6 ) ); //36

   echo $results[0] . "\n";
   echo $results[1] . "\n";
   echo $results[2] . "\n";
   print_r( $results )