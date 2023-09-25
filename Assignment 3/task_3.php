<?php

    function sortArray($grades){
        rsort($grades);
        for($i=0;$i<count($grades);$i++){
            echo $grades[$i]." ";
        }
    }
    $grades = [85, 92, 78, 88, 95];
    sortArray($grades);

?>