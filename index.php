<?php
include("./check.php");
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Number To Roman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 15%;
            width: 40%;
        }

        body {
            background-image: url("./img/bg.jpg");
            background-position: center;
            /* background-size: cover; */
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (!empty($_SESSION["msg"])) {
            echo $_SESSION["msg"];
        }
        unset($_SESSION["msg"]);

        ?>
        <form action="check.php" method="post">
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Enter Number" name="value" aria-label="" aria-describedby="">
                <input type="submit" class="btn btn-outline-secondary" id="button-addon2" value="Submit" name="submit">
            </div>

        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>