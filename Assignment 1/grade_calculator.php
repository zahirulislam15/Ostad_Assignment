<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-5">
                <div class="card" style="margin-top:20%;">
                    <div class="card-body">
                        <center>
                            <div class="title"><b><i><span style="text-align: center;">Basic Grade Calculator</span></i></b></div>
                        </center>
                        <form action="" method="post">
                            <div>
                                <label for="">Input First Test Score</label>
                                <input class="form-control" type="number" name="num1" id="" placeholder="">
                            </div>
                            <div>
                                <label for="">Input Second Test Score</label>
                                <input class="form-control" type="number" name="num2" id="" placeholder="">
                            </div>
                            <div>
                                <label for="">Input Third Test Score</label>
                                <input class="form-control" type="number" name="num3" id="" placeholder="">
                            </div>
                            <br><br>
                            <button type="submit" class="d-flex justify-content-center">Convert</button>

                        </form>
                        
                    </div>
                    <div class="result">
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                $num1 = $_POST["num1"];
                                $num2 = $_POST["num2"];
                                $num3 = $_POST["num3"];

                                $result = ($num1+$num2+$num3)/3;
                                if($result >= 80) {
                                    echo "Average Number is $result". "<br>". "And Grade is A";                                     
                                }
                                else if($result >= 70) {
                                    echo "Average Number is $result". "<br>". "And Grade is B";                                     
                                }
                                else if($result >= 60) {
                                    echo "Average Number is $result". "<br>". "And Grade is C";                                     
                                }
                                else if($result >= 50) {
                                    echo "Average Number is $result". "<br>". "And Grade is D";                                     
                                }
                                else {
                                    echo "Average Number is $result". "<br>". "And Grade is F";                                     
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    
</body>
</html>