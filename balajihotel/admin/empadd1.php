<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$e1 = $_POST['usn1']; //fname
$e2 = $_POST['usn2']; //lname
$e3 = $_POST['usnum1']; //num
$e4 = $_POST['usn3']; //email
$e5 = $_POST['id2']; //id type
$e6 = $_POST['id3']; //id num
$e7 = $_POST['ds3']; //designation type
$e8 = $_POST['add3']; //address 



$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

date_default_timezone_set('Asia/Kolkata'); //getting current time
$eTime = date('d-m-Y h:i A');  // time for billing receipt 

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
            background-color: cadetblue;
            padding-bottom: 150px;
        }

        .button1 {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            cursor: pointer;
        }
        @media (max-width: 400px) {
            .button1 {
                padding: 5px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                border-radius: 5px;
                width: 98%;
                margin-top: 30px;
                margin-left: auto;
                margin-right: 5%;
                display: block;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Add Employee </h3>
        <hr>
        <div class="panel-body">
            <?php
                if (isset($_SESSION['asdf'])) {
                $sql = "INSERT INTO `empdetail` (`eid`, `efname`, `elname`, `eph_no`, `eemail`, `icard_id`, `eid_number`, `createdate`, `edname`, 
                `eaddress`, `estatus`) VALUES (NULL, '$e1', '$e2', '$e3', '$e4', '$e5', '$e6', '$eTime ', '$e7', '$e8', '0')";

                $rs = mysqli_query($con, $sql);

                if ($rs == 1) {
                    echo " Employee is Added......! <br><br>";
                    echo "First Name: " . $e1 . "<br>";
                    echo "Last Name: " . $e2 . "<br>";
                    echo "Ph.No: " . $e3 . "<br>";
                    echo "Email: " . $e4 . "<br>";
                    echo "Id Type: " . $e5 . "<br>";
                    echo "Id No: " . $e6 . "<br>";
                    echo "Designation : " . $e7 . "<br>";
                    echo "Address : " . $e8 . "<br>";
                    echo "-------------------------------";

                    unset($_SESSION['asdf']);
                }
            }
             else {
                echo " Record is Not Inserted OR Record is inserted already Don't Refresh Go back . <br>";
            }
            ?>
            <button class="button1" style="color:bisque" onclick="location.href='http://localhost/balajihotel/admin/'" type="button"> Go Back </button>
        </div>
    </div>
</body>

</html>