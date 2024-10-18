<?php include('nav.php'); ?>
<?php  
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

if(!isset($_SESSION['ea1']))
{   
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
    </style>
    <script>
         setTimeout(function(){
            window.location.href = 'http://localhost/balajihotel/admin/empattend1.php';
         }, 2000);
      </script>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Updated </h3>
        <hr>
        <div class="panel-body">
        <?php 
        
        if(!empty($_SESSION['ea1']))
        {
            $d1=$_SESSION['ea1'];
            $t1=$_SESSION['achti'];

            $query  = "INSERT INTO `empattend` (`aeid`, `eid`, `achkdate`, `eastatus`, `eapaystatus`)
             VALUES (NULL, '$d1', '$t1', '1', '0')";
            $result = mysqli_query($con, $query);

            if($result==1)
            echo "Employee id No: ".$d1." is Presented.. <br>";
        }
        unset($_SESSION['ea1']);
        unset($_SESSION['achti']);

        ?>
        </div>
    </div>
</body>

</html>