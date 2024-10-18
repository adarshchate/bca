<!-- this page is Messages for contact us -->
<?php include('nav.php'); ?>
<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>emp</title>

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

        .button2 {
            padding: 10px 20px;
            background-color: darkslategrey;
            border: 1px solid #ddd;
            color: white;
            border-radius: 8px;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
            display: block;
            cursor: pointer;
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

            .button2 {
                padding: 8px 20px;
                background-color: #32a852;
                border: 1px solid #ddd;
                color: white;
                width: 50%;
                font-size: 11px;
                border-radius: 5px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
        }

        @media only screen and (max-width: 420px) {
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
                padding: 0.5px;
            }

            .button2 {
                padding: 5px 20px;
                background-color: #32a852;
                border: 1px solid #ddd;
                color: white;
                width: 100%;
                font-size: 11px;
                border-radius: 2px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>

    <div class="myss" style="overflow-x:auto;">
        <h4 align="center "> Designation </h4>
        <table id="myTable">
            <tr>
                <th>Desg id</th>
                <th>Designation type</th>
                <th>Salary</th>
                <th>Status</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            $sql = "SELECT * FROM `empdgon`";   //show all data 
            $rs = mysqli_query($con, $sql); //query run

            while ($row = mysqli_fetch_assoc($rs)) {

                echo "<tr>";

                echo "<td>";
                echo $row['edid'];
                echo "</td>";

                echo "<td>";
                echo $row['edname'];
                echo "</td>";

                echo "<td>";
                echo $row['esalary'];
                echo "</td>";

                echo "<td>";
                if ($row['edstatus'] == 0)
                    echo "<p style='color:green;'> On </p>";
                else if ($row['edstatus'] == 1)
                    echo "<p style='color:red;'> Off </p>";
                echo "</td>";

                echo "</tr>";
            }

            ?>
        </table>

    </div>
    <button class="button2" onclick="javascript:window.open('empd1.php','_self')"> Add Designation </button>
    <button class="button2" onclick="javascript:window.open('empdup1.php','_self')"> Update Designation </button>
    <button class="button2" onclick="javascript:window.open('empdel.php','_self')"> Delete Designation </button>

</body>

</html>