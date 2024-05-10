<?php
function arrSecLargest($arr){
 $max = 0; $sec = -1;
 $j = count($arr)-1;$i=1;
 while($i<=$j){
    if($arr[$i] > $arr[$max]){
     $sec = $max;
     $max = $i;
    }else{
        if($arr[$i] > $arr[$sec] || $sec == -1){
            $sec = $i;
        }
    }
    $i++;
    
 }
 return $arr[$sec];
}

$arr = [2,4,5,23,45,2342,35,234];
print_r($arr);
echo (arrSecLargest($arr));
?>
