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
                            <div class="title"><b><i><span style="text-align: center;">Basic Calculator</span></i></b></div>
                        </center>
                        <form action="" method="post">
                            <div>
                                <label for="">First Number</label>
                                <input class="form-control" type="number" name="num1" id="" placeholder="First number">
                            </div>
                            <div>
                                <label for="">Second Number</label>
                                <input class="form-control" type="number" name="num2" id="" placeholder="Second number">
                            </div>
                            <div>
                                <label for="">Select Operation</label>
                                <select class="form-control" name="operations" id="">
                                    <option value="add">Addition</option>
                                    <option value="sub">Subtraction</option>
                                    <option value="mul">Multiplication</option>
                                    <option value="division">Division</option>
                                </select>
                            </div><br><br>
                            <button type="submit" class="d-flex justify-content-center">Calculate</button>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="result">
            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operations"];

                    switch ($operation) {
                        case 'add':
                            $result = $num1+ $num2;
                            echo "Result: $result";
                            break;

                        case 'sub':
                            $result = $num1 - $num2;
                            echo "Result: $result";
                            break;

                        case 'mul':
                            $result = $num1 * $num2;
                            echo "Result: $result";
                            break;
                        
                        case 'division':
                            $result = $num1 / $num2;
                            echo "Result: $result";
                            break;
                        
                        default:
                            echo "somthing went wrong";
                            break;
                    }
                }



            ?>
        </div>


    </div>
    
</body>
</html>