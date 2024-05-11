<?php
 function removeDuplicate($arr){
    echo '<pre>';
    print_r($arr);
    $res = [];
    for($i=0;$i< count($arr);$i++){
        if(!in_array($arr[$i],$res)) {
            $res[] = $arr[$i];
        }
    }
    return $res;
 }

 $arr = [1, 2, 2, 3, 4, 4, 4, 5, 5];
 echo '<pre>';
 print_r(removeDuplicate($arr));

?>
