<?php
include('dbconnect.php');
session_start();

$_SESSION['u'] = $_POST['usn'];
$_SESSION['un'] = $_POST['usnum'];
$_SESSION['rt'] = $_POST['room'];


if (empty($_SESSION['un'])) // if not set 
{
    header("Location:http://localhost/balajihotel/admin/getbill.php");
    session_destroy();
}


$na = $_SESSION['u'];
$nu = $_SESSION['un'];
$rti = $_SESSION['rt'];

/*
$query  = "SELECT roomty FROM rooms where rty_id=$rti";    //get ROOM_ID to get room type rooms RNO 
$result = mysqli_query($con, $query);
$r = $result;
$_SESSION['rtn']=$r['roomty'];*/

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$sql = "SELECT customer.cid,customer.fname,customer.lname,bookings.bdate,bookings.ckindate,
    bookings.ckoutdate,customer.invnum FROM customer JOIN bookings ON customer.cid=bookings.cid WHERE
(customer.fname='$na' AND customer.ph_no='$nu') AND (bookings.rty_id='$rti' AND bookings.bkstatus='0')";   //show all data 

$rs = mysqli_query($con, $sql); //query run
$co = mysqli_num_rows($rs);

if ($co == 0) // if not set 
{
    header("Location:http://localhost/balajihotel/admin/getbill.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>

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
            background-color: wheat;
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
            background-color: #ffbc05;
            padding-bottom: 150px;
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

        .button2 {
            padding: 8px 16px;
            background-color: darkslategrey;
            border: 1px solid #ddd;
            color: white;
            font-size: 10px;
            border-radius: 8px;
            margin-top: 50px;
            margin-left: 12px;
            display: block;
            cursor: pointer;
        }

        button:hover {
            background-color: royalblue;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 15px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: palegoldenrod
        }

        tr:nth-child(odd) {
            background-color: teal
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

            table {
                border-collapse: collapse;
                width: 100%;
                height: auto;
                border: 1px solid #ddd;
                font-size: 12px;
            }

            th,
            td {
                text-align: left;
                padding: 1px;
            }

        }


        @media (max-width: 400px) {
            .form-control {
                /*TEXT FILD*/
                font-size: 10px;
                margin: 5px 5px 5px 0;
                padding: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 99%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 5px 10px 5px 0;
            }

            .button1 {
                padding: 8px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;

            }

            table {
                border-collapse: collapse;
                width: 100%;
                height: fit-content;
                border: 0.1px;
                font-size: 9px;
            }

            th,
            td {
                text-align: left;
                padding: 1px;
            }

        }


        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> User Bill Form </h3>
        <hr>
        <form class="booking" action="getbill2.php" method="post">
            <div class="panel-heading"> Chose your
                Information:
            </div>

            <div class="panel-body">

                <table id="myTable">
                    <tr>
                        <th> cid </th>
                        <th> first name </th>
                        <th> last name </th>
                        <th> booking date </th>
                        <th> check-in date </th>
                        <th> check-out date </th>
                        <th> Invoice No. </th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($rs)) {
                        echo "<tr>";
                        echo "<td>";
                        echo $row['cid'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['fname'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['lname'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['bdate'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['ckindate'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['ckoutdate'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['invnum'];
                        echo "</td>";
                        echo "</tr>";
                    }

                    ?>
                </table> <br><br><br>
                <div class="form-group">
                    <label>Enter your Invoice No: </label> <br>
                    <input type="text" name="inv" class="form-control" autocomplete="off" placeholder="Invoice No" required>
                </div>

                <button class="button1" type="submit">Get Bill</button> <br>
                <button class="button2" type="submit" onclick="window.location.href='http://localhost/balajihotel' ">Go Back to Home</button>

            </div>
        </form>

    </div>
</body>

</html>