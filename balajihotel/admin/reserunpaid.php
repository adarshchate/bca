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

        .myss {
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
        th {
            text-align: left;
            padding: 3px;
            background-color:#fcba03;
        }

        tr:nth-child(even) {
            background-color: #fbf7ff;
        }

        tr:nth-child(odd) {
            background-color: #ffdbdb;
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

            .myss {
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
                padding: 1px;
            }
        }
    </style>
</head>

<body>

    <div class="myss" style="overflow-x:auto;">
        <h4 align="center "> Unpaid cancellations  Details </h4>
        <table id="myTable">
            <tr>
                <th>cancel id</th>
                <th>customer id</th>
                <th>First Name</th>
                <th>Room No</th>
                <th>Cancel Booking Date</th>
                <th>Package price</th>
                <th>nof days</th>
                <th>Total</th>
                <th>chk-in-date</th>
                <th>chk-out-date</th>
                <th>Status</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT ccid ,cid ,name,rno,canceldt, pkprice,nofday,tprice,ckindate,ckoutdate,cancelpaystatus 
            FROM cancelbookings  WHERE cancelpaystatus='0'";      //show all data 
            $rs = mysqli_query($con, $sql); //query run


            while ($row = mysqli_fetch_assoc($rs)) {

                    echo "<tr>";
                    echo "<td>";
                    echo $row['ccid'];
                    echo "</td>";

                    echo "<td>";
                    echo $row['cid'];
                    echo "</td>";

                    echo "<td>";
                    echo $row['name'];
                    echo "</td>";

                    echo "<td>";
                    echo $row['rno'];
                    echo "</td>";

                    echo "<td>";
                    echo $row['canceldt'];
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
                    echo $row['ckindate'];
                    echo "</td>"; 

                    echo "<td>";
                    echo $row['ckoutdate'];
                    echo "</td>"; 
                    
                    echo "<td>";
                    //echo $row['bkstatus'];
                    if ($row['cancelpaystatus'] == 0)
                    echo "<p style='color:red;'> unpaid</p>";
                    else
                    echo "<p style='color:green;'> paid</p>";

                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </div>

</body>

</html>