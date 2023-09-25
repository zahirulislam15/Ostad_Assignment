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
