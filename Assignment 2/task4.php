<?php

echo "Print first 15 number of fibinacci series using Function. And send 15 as an argument. \n";

function fibonacciSeries($n){
    $a = 0;
    $b = 1;
    for ($i=0; $i < $n; $i++) {         
        echo $a . " ";
        $c= $a+$b;
        $a = $b;        
        $b = $c;
        
    }
    
}

fibonacciSeries(15);

?>