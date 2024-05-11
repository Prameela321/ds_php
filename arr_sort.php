<?php 
function sortedOrNot($arr){
    if(count($arr) <= 1)
    return true;
    for($i= 1;$i<count($arr)-1;$i++){
        if($arr[$i-1]> $arr[$i])
        return false;
    
    }
    return true;
}
$arr = [2,4,5,23,24,45,2342];
print_r($arr);
var_dump(sortedOrNot($arr));
?>
