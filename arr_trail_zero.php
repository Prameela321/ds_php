<?php
 function moveZero($arr){
    echo '<pre>';
    print_r($arr);
    $j = 0;
    for($i=1;$i<count($arr);$i++){
        if($arr[$j] == 0 && $arr[$i] != 0){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $j++;
        }
        if($arr[$j] !== 0)
         $j++;
    }
    return $arr;
 }
 $arr = [1,2,0,0,0,3,6];
 echo '<pre>';
 print_r(moveZero($arr));
 $arr1 = [0, 1, 9, 8, 4, 0, 0, 2, 7, 0, 6, 0, 9];
 echo '<pre>';
 print_r(moveZero($arr1));
?>
