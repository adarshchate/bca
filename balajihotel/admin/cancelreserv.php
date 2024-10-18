<!-- this page is Messages for contact us -->
<?php include('nav.php'); ?>
<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Messages</title>

    <style>
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

        .myss{
            padding-top: 10px;
            background-color: #ddd;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 0.5px solid #ddd;
            font-size: 12px;
        }

        th,
        td {
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #fbf7ff;
        }

        tr:nth-child(odd) {
            background-color:#ffdbdb;
        }

        table,
        th,
        td {
            border: 0.01em solid black;
        }

        @media only screen and (max-width: 610px) {
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 11px;
            }

            th,
            td {
                text-align: left;
                padding: 3px;
            }
            .myss{
            padding-top: 10px;
            margin-top: -10px;
            background-color: #ddd;
        }
        }

        @media only screen and (max-width: 420px) {
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 0px solid #ddd;
                font-size: 11px;
            }

            th,
            td {
                text-align: left;
                padding: 0.5px;
            }
        }
    </style>
</head>

<body>

    <div class="myss" style="overflow-x:auto;">
        <h4 align="center ">All Bookings Details </h4>
        <table id="myTable">
            <tr>
                <th>c_id</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Booking Time</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Package price</th>
                <th>nof days</th>
                <th>Total</th>
                <th>Invoice</th>
                <th>Status</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT customer.cid,customer.fname,customer.lname,customer.ph_no,bookings.rno,room_type.roomty,bookings.bdate,
            bookings.ckindate,bookings.ckoutdate,bookings.pkprice,bookings.nofday,bookings.tprice, customer.invnum,
            bookings.bkstatus FROM customer JOIN bookings JOIN room_type ON (customer.cid=bookings.cid) AND (bookings.rty_id=room_type.rty_id) 
            WHERE bookings.bkstatus='1'";   //show all data 
            $rs = mysqli_query($con, $sql); //query run

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
                echo $row['ph_no'];
                echo "</td>";

                echo "<td>";
                echo $row['rno'];
                echo "</td>";

                echo "<td>";
                echo $row['roomty'];
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
                echo $row['pkprice'];
                echo "</td>";

                echo "<td>";
                echo $row['nofday'];
                echo "</td>";

                echo "<td>";
                echo $row['tprice'];
                echo "</td>";

                echo "<td>";
                echo $row['invnum'];
                echo "</td>";

                echo "<td>";
                //echo $row['bkstatus'];
                if($row['bkstatus']==0)
                echo "<p style='color:green;'> reserved </p>";
                else if($row['bkstatus']==1)
                echo "<p style='color:red;'>cancelled </p>";

                echo "</td>";

                echo "</tr>";
            }

            ?>
        </table>
    </div>

</body>

</html>