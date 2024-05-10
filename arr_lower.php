<?php 
function arrLower($arr){
   echo '<pre>';
    print_r($arr);
    $arr1 = array_map('strtolower',$arr);
    return $arr1;
}
$arr = ['A','C','E','P','T'];
echo '<pre>';
print_r(arrLower($arr));
?>