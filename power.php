<?php
ini_set('memory_limit', '-1');
function power($x,$y){
    if($y=== 0)
    return 1;
    $temp = power($x,floor($y/2));
    if($y%2  === 0){
        return $temp*$temp;
    }else{
        return $x*$temp*$temp;
    }
}

print_r(power(5,3));
?>
