<?php 
function countDigits($number) { 
    $digitCount = 0; 
    while ($number != 0) { 
        $number = (int)($number / 10); 
        $digitCount++; 
    } 
    return $digitCount; 
} 

function strDigits($number){
    $number = (string) $number;
    $number = str_replace(".","",$number);
    var_dump(strlen($number));exit;
}
function revNumber($number){
    $rev = 0;
    while($number){
      $rev = $rev*10+($number%10);
      $number = round($number/10);
    }
    return $rev;
}

function revStr($number){
   $number = (string)$number;
   return strrev($number);
}

function repeatDigitCount($number){
    echo '<pre>';
    print_r($number);
    $str = str_replace(".","",(string)$number);
    echo '<pre>original str<pre>';
    print_r($str);
    $count = array_count_values(str_split($str));
    echo '<pre>';
    print_r($count);
    $repeat = array_filter($count,function($val,$ind){
        echo $ind.'-'.$val.'<pre>';
        return $val>1;
    },ARRAY_FILTER_USE_BOTH);
    return  $repeat;
}
  
// $numStr = '110010'; 
// $digitCount1 = countDigits($numStr); 
// echo "String Length: " . $digitCount1; 
  
// $number = 12345.13; 
// $digitCount2 = strDigits($number); 
// echo "\nString Length: " . $digitCount2; 

// $number = 1234513; 
// $digitRev = revNumber($number); 
// echo "\nString Length: " . $digitRev; 

// $number = 1234733437217237; 
// $digitRepeat = repeatDigitcount($number); 
// echo 'repeatDigitstest<pre>';
// print_r($digitRepeat); 
function strLower($str){
    $newStr = str_replace(range('A','Z'),range('a','z'),$str);
    return $newStr;
}
$str1 = 'AEeseSTURVERAWEOEO';
print_r($str1);
echo '<pre>';
print_r(strLower($str1));

?>