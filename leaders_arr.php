<?php
 function leaderArr($arr){
    $last = count($arr)-1;
    $max = $arr[$last];
    $lArr = [$arr[$last]];
    for($i= $last-1;$i>=0;$i--){
       if($arr[$i] > $max){
         $max = $arr[$i];
         $lArr[] = $max;
       }else{
        return $lArr;
       }
    }

 }
 echo '<pre>';
 print_r(leaderArr([4,7,1,0]));
?>
