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
            margin-top: -8px;
            background-color: #ddd;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        th,
        td {
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #f0fff8;
        }

        tr:nth-child(odd) {
            background-color: teal;
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
        <h4 align="center ">All Customers Details </h4>
        <table id="myTable">
            <tr>
                <th>C_id</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Contact </th>
                <th>Email</th>
                <th>Address </th>
                <th>id_type</th>
                <th>id_number</th>
                <th>Created Date</th>
                <th>Invoice No</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT * FROM `customer`";   //show all data 
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
                echo $row['email'];
                echo "</td>";

                echo "<td>";
                echo $row['address'];
                echo "</td>";

                echo "<td>";
                echo $row['icard_id'];
                echo "</td>";

                echo "<td>";
                echo $row['id_number'];
                echo "</td>";

                echo "<td>";
                echo $row['createdate'];
                echo "</td>";

                echo "<td>";
                echo $row['invnum'];
                echo "</td>";

                echo "</tr>";
            }

            ?>
        </table>
    </div>

</body>

</html>