<?php

    echo "Print first 10 number of fibinacci series. If number is greater than 100 break the loop. \n";
    $a = 0;
    $b = 1;
    echo "$a $b ";
    for($i = 2; $i < 10; $i++){
        
        $c= $a+$b;
        if($c > 100){
            break;
        }
        $a = $b;        
        $b = $c;
        echo $c . " ";        
        
    }


?>