<?php 
function primeFactors($n){
    while($n%2 === 0){
        echo "2<pre>";
        $n= $n/2;
    }

    while($n%3=== 0){
        echo "3<pre>";
        $n= $n/3;
    }

    for($i=5;$i<=sqrt($n);$i+=6){
        while($n%$i === 0){
            echo $i.'<pre>';
            $n = $n/$i;
        }
        while($n%($i+2) ===0){
            echo ($i+2).'<pre>';
            $n= $n/($i+2);
        }
        if($n>3)
        echo $n;
    }
}

primeFactors(315);

?>

