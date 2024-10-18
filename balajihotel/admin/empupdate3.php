<?php include('nav.php'); ?>
<?php  
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

if(!isset($_SESSION['eaid']))
{   
    echo " already updated.. select other options..";
    exit;
}

$r2=$_SESSION['eaid'];


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
        
        if(!empty($_POST['usn1']))
        {
            $d1=$_POST['usn1'];
            $query  = "UPDATE `empdetail` SET `efname` = '$d1' WHERE `empdetail`.`eid`='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "Employee First Name : ".$d1." is updated.. <br>";
        }

         if(!empty($_POST['usn2']))
        {
            $d2=$_POST['usn2'];
            $query  = "UPDATE `empdetail` SET `elname` = '$d2' WHERE `empdetail`.`eid` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "Employee Last Name : ".$d2." is updated.. <br>";
        }
         if(!empty($_POST['usnum1']))
        {
            $d3=$_POST['usnum1'];
            $query  = "UPDATE `empdetail` SET `eph_no` = '$d3' WHERE `empdetail`.`eid` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "Phone No : ".$d3." is updated.. <br>";
        }
         if(!empty($_POST['usn3']))
        {
            $d4=$_POST['usn3'];
            $query  = "UPDATE `empdetail` SET `eemail` = '$d4' WHERE `empdetail`.`eid` ='$r2'";
            $result = mysqli_query($con, $query);
            if($result==1)
            echo "Email : ".$d4." is updated.. <br>";
        }
        
        if(!empty($_POST['id2']))
       {
           $d5=$_POST['id2'];
           $query  = "UPDATE `empdetail` SET `icard_id` = '$d5' WHERE `empdetail`.`eid` ='$r2'";
           $result = mysqli_query($con, $query);
           if($result==1)
           echo "Icard Type : ".$d5." is updated.. <br>";
       }
        if(!empty($_POST['id3']))
       {
           $d6=$_POST['id3'];
           $query  = "UPDATE `empdetail` SET `eid_number` = '$d6' WHERE `empdetail`.`eid` ='$r2'";
           $result = mysqli_query($con, $query);
           if($result==1)
           echo "Id Number : ".$d6." is updated.. <br>";
       }
        if(!empty($_POST['ds3']))
       {
           $d7=$_POST['ds3'];
           $query  = "UPDATE `empdetail` SET `edname` = '$d7' WHERE `empdetail`.`eid` ='$r2'";
           $result = mysqli_query($con, $query);
           if($result==1)
           echo "Designation Type : ".$d7." is updated.. <br>";
       }
        if(!empty($_POST['add3']))
       {
           $d8=$_POST['add3'];
           $query  = "UPDATE `empdetail` SET `eaddress` = '$d8' WHERE `empdetail`.`eid` ='$r2'";
           $result = mysqli_query($con, $query);
           if($result==1)
           echo "Address : ".$d8." is updated.. <br>";
       }
         if(!empty($_POST['xx6']))
        {
            $d3=$_POST['xx6'];
            if($d3==4)
            {
                $query  = "UPDATE `empdetail` SET `estatus` = '1' WHERE `empdetail`.`eid` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
            else if($d3==3)
            {
                $query  = "UPDATE `empdetail` SET `estatus` = '0' WHERE `empdetail`.`eid` ='$r2'";
                $result = mysqli_query($con, $query);
                if($result==1)
                echo "Status : is updated.. <br>";
            }
        }

        unset($_SESSION['eaid']);
        ?>
        </div>
    </div>
</body>

</html>