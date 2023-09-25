<?php

function oddNumber($numbers){
    $num = [];
    for($i=0;$i<10;$i++){
        if($numbers[$i]%2 != 0){
            $num[] = $numbers[$i];
        }
    }
    // print_r($num);
    for($i=0;$i<count($num);$i++){
        echo $num[$i]." ";
    }
    
}
$numbers = [1,2,3,4,5,6,7,8,9,10];
oddNumber($numbers);

?>