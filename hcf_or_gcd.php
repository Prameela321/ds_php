<?php
  function gcd ($a,$b){
   return $b===0 ? $a: gcd($b,$a%$b);
 }

 $a = 98 ;$b = 56 ;
 print_r(gcd($a,$b));
?>
