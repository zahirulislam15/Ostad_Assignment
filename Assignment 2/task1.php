<?php
    function evenNumberUsingForLoop($x, $y){
        $i = ++$x;
        for(;$i<=$y;$i+=2){            
            echo $i . " ";            
        }
    }

    function evenNumberUsingWhileLoop($x, $y){
        $i = ++$x;
        // $i=2;
        while($i<=$y){            
            echo $i . " ";            
            $i+=2;
        }
    }

    function evenNumberUsingDoWhileLoop($x, $y){
        $i=++$x;
        // $i=2;
        do {            
            echo $i . " ";            
            $i+=2;
        } while ($i<=$y);
            
        
    }

    echo "Even number using for loop \n";
    evenNumberUsingForLoop(1,20);

    echo "\n\nEven number using while loop \n";
    evenNumberUsingWhileLoop(1,20);

    echo "\n\nEven number using do while loop \n";
    evenNumberUsingDoWhileLoop(1,20);

?>