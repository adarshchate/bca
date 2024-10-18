<?php include('nav.php'); ?>
<?php  
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

if(!isset($_SESSION['rri']))
{   
    echo " already updated.. select other options..";
    exit;
}

$r2=$_SESSION['rri'];


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

    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Updated </h3>
        <hr>
        <div class="panel-body">
        <?php 
        
        if(isset($_POST['xx1']))
        {
            $d1=$_POST['xx1'];
            $query  = "UPDATE `room_type` SET `roomty` = '$d1' WHERE `room_type`.`rty_id` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "the room type: ".$d1." is updated.. <br>";
        }
        else if(isset($_POST['xx2']))
        {
            $d2=$_POST['xx2'];
            $query  = "UPDATE `room_type` SET `price` = '$d2' WHERE `room_type`.`rty_id` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "the Price: ".$d2." is updated.. <br>";
        }
        else if(isset($_POST['xx3']))
        {
            $d3=$_POST['xx3'];
            if($d3==4)
            {
                $query  = "UPDATE `room_type` SET `rtstatus` = '1' WHERE `room_type`.`rty_id` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
            else if($d3==3)
            {
                $query  = "UPDATE `room_type` SET `rtstatus` = '0' WHERE `room_type`.`rty_id` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
        }
        else if(isset($_POST['xx4']) and isset($_POST['xx5']) and isset($_POST['xx6']))
        {
            $d4=$_POST['xx4'];
            $d5=$_POST['xx5'];
            $d6=$_POST['xx6'];

            $query  = "UPDATE `room_type` SET `roomty` = '$d4' WHERE `room_type`.`rty_id` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "the room type: ".$d4." is updated.. <br>";

            $query  = "UPDATE `room_type` SET `price` = '$d5' WHERE `room_type`.`rty_id` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "the Price: ".$d5." is updated.. <br>";

            if($d6==4)
            {
                $query  = "UPDATE `room_type` SET `rtstatus` = '1' WHERE `room_type`.`rty_id` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
            else if($d6==3)
            {
                $query  = "UPDATE `room_type` SET `rtstatus` = '0' WHERE `room_type`.`rty_id` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
        }

        unset($_SESSION['rri']);
        ?>
        </div>
    </div>
</body>

</html>