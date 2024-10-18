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
            margin-top: -8px;
            background-color: #ddd;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        th,
        td {
            text-align: left;
            padding: 5px;
        }

        tr:nth-child(even) {
            background-color: #fff5f5;
        }

        tr:nth-child(odd) {
            background-color: #f6fff5;
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
                padding: 8px;
            }
        }

        @media only screen and (max-width: 420px) {
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 8px;
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
        <h4 align="center "> Rooms Type </h4>
        <table id="myTable">
            <tr>
                <th>rty id</th>
                <th>Room type</th>
                <th>Price</th>
                <th>Status</th>
            </tr>

            <?php
            $con = makeconnection();
            //$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT * FROM `room_type`";   //show all data 
            $rs = mysqli_query($con, $sql); //query run

            while ($row = mysqli_fetch_assoc($rs)) {

                echo "<tr>";

                echo "<td>";
                echo $row['rty_id'];
                echo "</td>";

                echo "<td>";
                echo $row['roomty'];
                echo "</td>";

                echo "<td>";
                echo $row['price'];
                echo "</td>";

                echo "<td>";
                //echo $row['rtstatus'];
                if($row['rtstatus']==0)
                echo "<p style='color:green;'> ON </p>";
                else if($row['rtstatus']==1)
                echo "<p style='color:red;'> OFF </p>";
                echo "</td>";

                echo "</tr>";
                
            }

            ?>
        </table>
    </div>

</body>

</html>