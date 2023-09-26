<?php
    function studentAverageMark($studentGrades){
        $AverageNumbers = [];
        foreach($studentGrades as $item){
            $sum =0;
            foreach($item as $value){
                $sum+= $value;
            }
            $avg = number_format(($sum/3), 2);
            $AverageNumbers[] = $avg;
        }

        $key = array("student1","student2","student3");
        $AverageNumber = array_combine($key, $AverageNumbers);
        echo "Students Agerage Numbers are: " . PHP_EOL;
        foreach($AverageNumber as $abc=> $item){
            echo $abc." => ".$item .PHP_EOL;
        }

        foreach($AverageNumber as $abc=> $item){
            if($item >= 80)
                echo $abc." Gots A+" .PHP_EOL;
            elseif($item >= 70)
                echo $abc." Gots A" .PHP_EOL;
            elseif($item >= 60)
                echo $abc." Gots A-" .PHP_EOL;
            elseif($item >= 50)
                echo $abc." Gots B" .PHP_EOL;
            elseif($item >= 40)
                echo $abc." Gots C" .PHP_EOL;
            else
                echo $abc." Gots F" .PHP_EOL;
        }

    }


    $studentGrades = array(
        "student1" => array(
            "Math" => 98,
            "English" => 72,
            "Science" => 87
        ),
        "student2" => array(
            "Math" => 87,
            "English" => 89,
            "Science" => 81
        ),
        "student3" => array(
            "Math" => 90,
            "English" => 70,
            "Science" => 81
        )                
    );
    studentAverageMark($studentGrades);
?>
