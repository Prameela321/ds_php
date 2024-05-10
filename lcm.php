<?php 
function gcd($a,$b){
    return $b===0 ? $a: gcd($b,$a%$b);
}
function lcm($a,$b){
    return ($a/gcd($a,$b))*$b;
}
$a = 15;
 $b =20;
print_r(lcm($a,$b));
?>