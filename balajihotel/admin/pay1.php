<?php
include('dbconnect.php');

$bcid = $_POST['canid'];

session_start();
$_SESSION['bcanid']=$bcid;
/*
date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date('d-m-Y h:i A');  // time for billing receipt 

SELECT * FROM cancelbookings JOIN cancelpayment ON cancelbookings.ccid=cancelpayment.ccid WHERE 
cancelbookings.ccid='1';
*/


$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$sql = "SELECT * FROM `cancelbookings` WHERE ccid='$bcid' ";
$result = mysqli_query($con, $sql);

$co = mysqli_num_rows($result);

$sql = "SELECT * FROM cancelpayment WHERE cancelpayment.ccid='1'";
$rs = mysqli_query($con, $sql);

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
            background-color: #f5f9ff;
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
            background-color: #ffdbdb;
            color: black;
            padding-bottom: 150px;
            font-size: 18px;
            font-family: 'Comfortaa', cursive;

        }

        b {
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
        .form-group {
            /*   LABEL*/
            font-size: 18px;
            font-family: 'Comfortaa', cursive;
            margin: 5px 10px 5px 0;
        }
        .form-control {
            /*TEXT FILD*/
            font-size: 14px;
            width: max-content;
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            width: 60%;
        }
        @media (max-width: 700px) {
            .form-control {
                /*TEXT FILD*/
                font-size: 12px;
                margin: 5px 10px 5px 0;
                padding: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 80%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 12px;
                font-family: 'Comfortaa', cursive;
                margin: 5px 10px 5px 0;
            }
        }

        @media (max-width: 560px) {
            .button1 {
                padding: 7px 0px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                width: 95%;
                font-size: 10px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 10px 5px 25px 5px;
            }
            .form-control {
                /*TEXT FILD*/
                width: 95%;
            }
        }

        @media (max-width: 400px) {
            .form-control {
                /*TEXT FILD*/
                font-size: 10px;
                margin: 5px 5px 5px 0;
                padding: 7px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 95%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 10px 5px 25px 5px;
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> customer details </h3>
        <hr>
        <div class="panel-heading"> Customer information: <br>
        </div>

        <div class="panel-body">
            <p>
                <?php

                if ($co > 0) {
                    while ($asrt = mysqli_fetch_assoc($result)) {

                        echo " <b> Cancel Booking Id:</b> " . $asrt['ccid'] . "<br>";
                        echo " <b> Customer id :</b> " . $asrt['cid'] . "<br>";
                        echo " <b> Name:</b> " . $asrt['name'] . "<br>";
                        echo " <b> Room no:</b> " . $asrt['rno'] . "<br>";
                        echo " <b> Check-In Date:</b> " . $asrt['ckindate'] . "<br>";
                        echo " <b> Check_out Date:</b> " . $asrt['ckoutdate'] . "<br>";
                        echo " <b> Package Price:</b> " . $asrt['pkprice'] . "<br>";
                        echo " <b> Number of days:</b> " . $asrt['nofday'] . "<br>";
                        $_SESSION['tpk']=$asrt['tprice'];
                        echo " <b> Total Amount:</b> " . $asrt['tprice'] . "<br>";
        
                        $tot=$_SESSION['tpk'];
                        $tot1=$tot/100;
                        $tot2=$tot1*25;
                        $_SESSION['ramt']=$tot2;

                        echo " <b> Reduce: </b> 25%  <br>";
                        echo " <b> Reduce Amount: </b>".$tot2."<br>";

                        $tot3=$tot-$tot2;
                        $_SESSION['reamt']=$tot3;
                        echo " <b> Final Amount: </b>".$tot3."<br> <br>";

                        echo " <b> Invoce No:</b> " . $asrt['invno'] . "<br>";
                        echo " <b> Cancellation date:</b> " . $asrt['canceldt'] . "<br> <br>";

                        echo " <b> cancel reasons:</b> " . $asrt['cancelreas'] . "<br> <br> ";

                        echo " <b> Bank Name: </b> " . $asrt['bnkname'] . "<br> ";
                        echo " <b> Account No. :</b> " . $asrt['accno'] . "<br> ";
                        echo " <b> Ifsc code:</b> " . $asrt['ifscc'] . "<br> ";
                        echo " <b> UPI Id:</b> " . $asrt['upiid'] . "<br> <br> ";
                        echo " <b> Payment Status: </b> ";

                        if ($asrt['cancelpaystatus'] == 0) {
                            echo "<b style='color:red;'> Unpaid </b>"; ?>

            <form class="booking" action="paypaid.php" method="post">
                <div class="panel-heading">
                    <!--select: -->
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Enter Transactions id after paying : </label> <br>
                        <input type="text" name="trcode" class="form-control" autocomplete="off" placeholder="Transactions Id" required>
                    </div>

                    <br> <button class="button1" style='background-color:green;' type="submit"> Paid </button>
                </div>
            </form>
                    <?php } 
                    else if ($asrt['cancelpaystatus'] == 1) {
                            echo "<b style='color:green;'> Paid </b> <br>";

                            while ($row = mysqli_fetch_assoc($rs)) {
                                echo " <b> Sr.no : </b> " . $row['cpid'] . "<br> ";
                                echo " <b> cancel Booking id : </b> " . $row['ccid'] . "<br> ";
                                echo " <b>  Transactions id : </b> " . $row['transactionid'] . "<br> ";
                                echo " <b> pay amount : </b> " . $row['pamount'] . "<br> <br> ";
                                echo " <b> Reduce 25% : </b> " . $row['reduceper'] . "<br> ";
                                echo " <b> Paid amount : </b> " . $row['paidamount'] . "<br> ";
                                echo " <b> Profit amount : </b> " . $row['profit_amt'] . "<br> <br> ";
                                echo " <b> Paid date</b> : " . $row['paiddate'] . "<br> ";
                            }
                        }
                    }
                }

?>
</p>
<button class="button1" type="submit" onclick="window.location.href='http://localhost/balajihotel/admin/reservation.php' ">Go Back to Home</button>
</div>
</div>
</body>

</html>