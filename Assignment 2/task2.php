<?php

echo "Print number except numbers which is multiple by 5. \n";
for($i = 1; $i <= 50; $i++){
    if($i % 5 == 0){
        continue;
    }
    echo "$i" . " ";
}



?>