<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</head>
<body>
    
    <?php
    $name = "Mohammad Zahirul Islam";
    $age = 28;
    $country = "Bangladesh";
    $intro = "I am Mohammad zahirul Islam, a learner who is learning PHP laravel from ostad.";
    ?>

    <div class="container" style="margin-top: 20px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Name: <?php echo"$name" ?></h5>
                    <h5>Age: <?php echo "$age" ?></h5>
                    <h5>Country: <?php echo "$country" ?></h5>
                    <h5>Short Intro: <?php echo "$intro" ?></h5>                
                </div>
            </div>
        </div>
    </div>

</body>
</html>