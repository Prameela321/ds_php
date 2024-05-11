<?php

function binarySearch($arr,$x){
   $l = 0;
   $r = count($arr)-1;
   $mid ;
   while($r>=$l){
        echo 'test';
   }
   
}




$arr = array(2, 3, 4, 10, 40);
	$x = 10;
	$result = binarySearch($arr, $x);
	
($result == -1) ? print_r("Element is not present in array")
			: (echo "Element is present at index ". $result);
?>
