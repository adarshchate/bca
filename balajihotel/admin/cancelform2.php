<?php
include('dbconnect.php');
session_start();

$rre=$_POST['re1'];
$b1=$_POST['bnkname'];
$b2=$_POST['accnum'];
$b3=$_POST['ifscc'];
$uid1=$_POST['upiid'];


$na = $_SESSION['u'];
$nu = $_SESSION['un'];
$invn = $_SESSION['inv'];


if (!isset($_SESSION['u'])) {
    header("Location:http://localhost/balajihotel/admin/cancelform.php");
}


date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date('d-m-Y h:i A');  // time for billing receipt 



$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$sql = "SELECT customer.cid,customer.fname,bookings.rno,bookings.ckindate,
bookings.ckoutdate,bookings.pkprice,bookings.nofday,bookings.tprice,
bookings.invno FROM customer JOIN bookings ON customer.cid=bookings.cid 
WHERE (customer.fname='$na' AND customer.ph_no='$nu') AND (bookings.invno='$invn' AND bookings.bkstatus='0')";
$result = mysqli_query($con, $sql); //query run

$co = mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cnncellation Invoice</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

        * {
            box-sizing: border-box;
        }
        /* for avoding white spaces on right side */
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .row {
            background-color: #affac3;
            width: 100%;
            height: 700px;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .page-header {
            /* reservation align */
            text-align: center;
        }

        .panel-heading {
            font-size: 18px;
            text-decoration: none;
            color: #000000;
            padding-bottom: 10px;
            padding-top: 10px;
            margin-left: 10px;
        }

        .panel-body {
            /*next div */
            padding-top: 22px;
            padding-left: 5px;
            padding-right: 5px;
            background-color:#ffdbdb;
            color:black;
            padding-bottom: 150px;
            font-size: 18px;
            font-family: 'Comfortaa', cursive;

        }
        b{
            font-family: 'Lora', serif;

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

        button:hover {
            background-color: royalblue;
        }

        @media (max-width: 400px) {
            .button1 {
                padding: 8px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                border-radius: 25px;
                margin-top: 60px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;

            }
        }
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> reservation cancellation Form </h3>
        <hr>
            <div class="panel-heading"> Conform your Information:
            </div>

            <div class="panel-body">
            <p>
            <?php 
            if ($co>0) // if not set 
            { 
                while($asrt = mysqli_fetch_assoc($result))
                {    

                    $cni=$asrt['cid'];
                    $cfn=$asrt['fname'];
                    $crno=$asrt['rno'];
                    $ckidt=$asrt['ckindate'];
                    $ckodt=$asrt['ckoutdate'];
                    $pbp=$asrt['pkprice'];
                    $nday=$asrt['nofday'];
                    $tamt=$asrt['tprice'];
                    $inno=$asrt['invno'];

                    echo " <b> Customer id :</b> ".$cni." <br> ";
                    echo " <b> Name:</b> ". $cfn."<br>";
                    echo " <b> Name:</b> ". $crno."<br>";
                    echo " <b> Check-In Date:</b> ". $ckidt." <br> ";
                    echo " <b> Check_out Date:</b> ". $ckodt." <br> ";
                    echo " <b> Package Price:</b> ". $pbp." <br> ";
                    echo " <b> Number of days:</b> ". $nday." <br> ";
                    echo " <b> Total Amount:</b> ". $tamt." <br> ";
                    echo " <b> Invoce No:</b> ". $inno." <br> <br> ";

                    echo " <b> Bank name :</b> ". $b1." <br> ";
                    echo " <b> Ac no.</b> ". $b2." <br> ";
                    echo " <b> ifsc.</b> ". $b3." <br> ";
                    echo " <b> upi id.</b> ". $uid1." <br> ";                
                }
                 $sql1 = "INSERT INTO `cancelbookings` (`ccid`, `cid`, `name`, `rno`, `ckindate`, `ckoutdate`, 
                 `pkprice`, `nofday`, `tprice`, `invno`, `canceldt`, `cancelreas`, `bnkname`, `accno`, `ifscc`,
                  `upiid`, `cancelpaystatus`) VALUES (NULL, '$cni', '$cfn', '$crno', '$ckidt', '$ckodt', '$pbp', '$nday', 
                  '$tamt', '$inno', '$cTime', '$rre', '$b1', '$b2', '$b3', 
                  '$uid1', '0');";

                $result1 = mysqli_query($con, $sql1); //query run
                echo "<br><br> Your Booking has been Cancel.. Booking amount will received withon 2 days";

                $sql = "UPDATE `bookings` SET bkstatus='1' WHERE bookings.invno='$invn' And bookings.cid='$cni'";
                $result = mysqli_query($con, $sql); //query run*/
                
            }
            else{
            
                session_abort();
                session_destroy();
                header("Location:http://localhost/balajihotel/admin/");
            }
                
                ?>
            </p><br>

             <button class="button1" type="submit" onclick="window.location.href='http://localhost/balajihotel' ">Go Back to Home</button>
            </div>

    </div>
</body>

</html>


