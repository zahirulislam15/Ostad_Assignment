<?php
    function evenNumberUsingForLoop($x, $y){
        for($i = $x;$i<=$y;$i++){
            if($i%2 == 0){
                echo $i . " ";
            }
        }
    }

    function evenNumberUsingWhileLoop($x, $y){
        $i = $x;
        while($i<=$y){
            if($i%2 == 0){
                echo $i . " ";
            }
        $i++;
        }
    }

    function evenNumberUsingDoWhileLoop($x, $y){
        $i=$x;
        do {
            
            if($i%2 == 0){
                echo $i . " ";
            }
            $i++;
        } while ($i<=$y);
            
        
    }

    echo "Even number using for loop \n";
    evenNumberUsingForLoop(1,20);

    echo "\n\nEven number using while loop \n";
    evenNumberUsingWhileLoop(1,20);

    echo "\n\nEven number using do while loop \n";
    evenNumberUsingDoWhileLoop(1,20);

?>