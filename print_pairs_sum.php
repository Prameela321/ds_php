<?php 

function printSumPair($arr,$sum){
   $pairArr = [];
   for($i = 0; $i< count($arr);$i++){
    $res = $sum-$arr[$i];
   
     if(in_array($res,$arr) &&  !in_array($arr[$i],$pairArr)){
       echo '<pre>'.$res.' '.$arr[$i];
       $pairArr[] = $res;
       $pairArr[] = $arr[$i];
     }
   }
    
} 
printSumPair( [1, 5, 7, -1, 5], 6);
?>
