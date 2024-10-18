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
            margin-bottom: 15px;
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
                margin-bottom: 10px;
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
                <th>e_id</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Ph No</th>
                <th>Email</th>
                <th>icard Type</th>
                <th>icard No</th>
                <th>Created Date</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Address</th>
                <th>Status</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT empdetail.eid,empdetail.efname,empdetail.elname,empdetail.eph_no,empdetail.eemail, 
            id_card_type.icard_type,empdetail.eid_number,empdetail.createdate,empdetail.edname,empdgon.esalary,
            empdetail.eaddress,empdetail.estatus FROM empdetail JOIN empdgon JOIN id_card_type 
            ON (empdetail.icard_id=id_card_type.icard_id) AND (empdetail.edname=empdgon.edname)";   //show all data 
            $rs = mysqli_query($con, $sql); //query run

            while ($row = mysqli_fetch_assoc($rs)) {

                echo "<tr>";
                echo "<td>";
                echo $row['eid'];
                echo "</td>";

                echo "<td>";
                echo $row['efname'];
                echo "</td>";

                echo "<td>";
                echo $row['elname'];
                echo "</td>";

                echo "<td>";
                echo $row['eph_no'];
                echo "</td>";

                echo "<td>";
                echo $row['eemail'];
                echo "</td>";

                echo "<td>";
                echo $row['icard_type'];
                echo "</td>";

                echo "<td>";
                echo $row['eid_number'];
                echo "</td>";

                echo "<td>";
                echo $row['createdate'];
                echo "</td>";

                echo "<td>";
                echo $row['edname'];
                echo "</td>";

                echo "<td>";
                echo $row['esalary'];
                echo "</td>";

                echo "<td>";
                echo $row['eaddress'];
                echo "</td>";

                echo "<td>";
                //echo $row['bkstatus'];
                if($row['estatus']==0)
                echo "<p style='color:green;'> Join </p>";
                else if($row['estatus']==1)
                echo "<p style='color:red;'> Removed </p>";

                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>