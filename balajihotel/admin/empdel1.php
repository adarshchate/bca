<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

if (!isset($_POST['empd'])) {
    echo " already updated.. select other options..";
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap');

        * {
            box-sizing: border-box;
        }

        html,
        body

        /* for avoding white spaces on right side */
            {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .row {
            background-color: #449dad;
            width: 100%;
            height: 700px;
            padding-top: 20px;
            margin-top: -10px;
            padding-bottom: 50px;
        }

        .page-header {
            /* reservation align */
            text-align: center;
        }

        .panel-body {
            /*next div */
            padding-top: 22px;
            padding-left: 12px;
            background-color: #9fbecf;
            padding-bottom: 150px;
        }

        .button1 {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            font-size: 12px;
            width: 40%;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Updated </h3>
        <hr>
        <div class="panel-body">
            <?php

            if (!empty($_POST['empd'])) {
                $d1 = $_POST['empd'];
                $query  = "DELETE FROM `empdgon` WHERE `empdgon`.`edid` ='$d1'";
                $result = mysqli_query($con, $query);
                if ($result == 1)
                    echo "<br>" . $d1 . " is deleted.. <br>";
                unset($_POST['empd']);
            } else 
            {
                echo " already Deleted.. select other options..";
                exit;
            } ?>

        </div>
    </div>
</body>

</html>