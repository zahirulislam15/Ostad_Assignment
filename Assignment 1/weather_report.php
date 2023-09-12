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
                            <div class="title"><b><i><span style="text-align: center;">Weather Report</span></i></b></div>
                        </center>
                        <form action="" method="post">
                            <div>
                                <label for="">Input Temperature</label>
                                <input class="form-control" type="number" name="num1" id="" placeholder="Temperature">
                            </div>
                            <br><br>
                            <button type="submit" class="d-flex justify-content-center">Convert</button>

                        </form>
                        
                    </div>
                    <div class="result">
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                $num1 = $_POST["num1"];
                                // $num2 = $_POST["num2"];
                                if($num1 <= 0){
                                    echo "It's Freezing!";
                                }
                                else if($num1 <= 15){
                                    echo "It's cool.";
                                }
                                else {
                                    echo "It's Warm.";
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