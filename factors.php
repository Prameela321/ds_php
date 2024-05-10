<?php
function factors($n){
    
    for($i=2 ;$i<= sqrt($n);$i++){
        if ($n % $i === 0) {
             echo ' '.$i;
           
        }
    }
    for(;$i>=1;$i--){
        if($n%$i === 0){
            echo ' '.$n/$i;
        }
    }
}

factors(100);
?>
