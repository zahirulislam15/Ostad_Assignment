<?php
    $a = 0;
    $b = 1;
    $c= $a+$b;
    echo "$a $b ";
    for($i = 2; $i < 100; $i++){
        
        $c= $a+$b;
        if($c > 100){
            break;
        }
        $a = $b;        
        $b = $c;
        echo $c . " ";        
        
    }


?>