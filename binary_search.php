<?php

function binarySearch($arr,$x){
   $l = 0;
   $r = count($arr)-1;
   $mid ;
   while($r>=$l){
       $mid = 1+floor($r-1)/2;
       if($arr[$mid] == $x)
          return $mid;
       else if($arr[$mid] > $x)
       $r = $mid-1;
       else
       $l = $mid+1;
   }
   return  -1 ; 
}
$arr = array(2, 3, 4, 10, 40);
	$x = 10;
	$result = binarySearch($arr, $x);
	
($result == -1) ? print_r("Element is not present in array")
			:  print_r($result);
?>
