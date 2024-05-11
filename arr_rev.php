<?php
function arrRev($arr){
    $i = 0;$j = count($arr)-1;
    while($i<$j){
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
        $i++;
        $j--;
    }
    return $arr;
}

$arr = [2,4,5,23,24,45,2342,7];
echo '<pre>';
print_r($arr);
echo '<pre>';
var_dump(arrRev($arr));
?>
