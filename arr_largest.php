<?php
function arrLargest($arr){
 $max = $arr[0];
 $j = count($arr)-1;$i=0;
 while($i<$j){
    if($arr[$i] > $max)
     $max = $arr[$i];
    if($arr[$j] > $max)
      $max= $arr[$j];
    $i++;
    $j--;
 }
 return $max;
}

$arr = [2,4,5,23,45,2342,35,234];
print_r($arr);
echo (arrLargest($arr));
?>
