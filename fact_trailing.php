<?php
function trailFact($n){
    $res = 0;
    for($i=5;($n/$i)>=1;$i*=5){
      $res += floor($n/$i);  
    }
    return  $res;
}

print_r(trailFact(100));
?>