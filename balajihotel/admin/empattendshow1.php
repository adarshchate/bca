<!-- this page is Messages for contact us -->
<?php include('nav.php'); ?>
<?php include('dbconnect.php'); //database connection...dbconnect.php  

if(!isset($_POST['fr1']))
{
    echo "can't direct Show ";
    exit;
}

$f1=$_POST['fr1'];
$f2=$_POST['to1'];

$start = date("d-m-Y", strtotime($f1));; //start date
$end = date("d-m-Y", strtotime($f2));; //end date


$dates = array();
$start = $current = strtotime($start);
$end = strtotime($end);

while ($current <= $end) {
    $dates[] = date('d-m-Y', $current);
    $current = strtotime('+1 days', $current);
}

//now $dates hold an array of all the dates within that date range
//print_r($dates);

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
            margin-bottom: 15px;
        }

        th,
        td {
            text-align: center;
            padding: 3px;
        }

        td {
            background-color:#fff5f5;
        }

        th {
            background-color: #e1ffde;
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
                margin-bottom: 10px;
            }

            th,
            td {
                text-align: center;
                padding: 0.5px;
            }
        }
    </style>
</head>

<body>

    <div class="myss" style="overflow-x:auto;">
        <h4 align="center ">All Attendances </h4>
        <table id="myTable">
            <tr>
                <th>E_id</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Designation</th>
                
                <?php
                $length = count($dates);
                for ($i = 0; $i < $length; $i++) {
                    echo "<th>" . $dates[$i] . "</th>";
                    //echo "<br>";
                }
                ?>
                <th> Total P </th>
                <th> E_id</th>
            </tr>

            <?php
            $con = makeconnection();
            $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

            // $sql = "SELECT achkdate FROM empattend WHERE eid='1' AND (achkdate>='10-01-2022' AND achkdate<'14-01-2022')";   

            $sql = "SELECT eid,efname,elname,edname FROM empdetail WHERE estatus='0'";
            $rs = mysqli_query($con, $sql); //query run

            while ($row = mysqli_fetch_assoc($rs)) {

                echo "<tr>";

                echo "<td>";
                $e1 = $row['eid'];
                echo $row['eid'];
                echo "</td>";

                echo "<td>";
                echo $row['efname'];
                echo "</td>";

                echo "<td>";
                echo $row['elname'];
                echo "</td>";

                echo "<td>";
                echo $row['edname'];
                echo "</td>";

                $sql1 = "SELECT achkdate FROM empattend WHERE eid='$e1'";
                $rs1 = mysqli_query($con, $sql1); //query run
                $c1 = mysqli_num_rows($rs1);

                $j = 0;
                $j7 = 0;

                if (empty($c1)) {
                    for ($i = 0; $i < $length; $i++) {
                        echo "<td>";
                        echo " - ";
                        echo "</td>";
                    }
                } else {
                    while ($row1 = mysqli_fetch_assoc($rs1)) {

                        while ($j <= $length-1) { //

                            $frd = $dates[$j];
                            $tod = date('d-m-Y', strtotime($row1['achkdate']));

                            $date1 = date_create($frd); //DATE DAYS diffrence 
                            $date2 = date_create($tod);
                            $diff = date_diff($date1, $date2);
                            $da = $diff->format("%R%a");
                            //echo $da;
                            //echo " " . $frd;
                            //echo " " . $tod, "<br>";
                            if ($da == 0) {
                                echo "<td>";
                                echo "<b style='color:green;'> P </b>";
                                echo "</td>";
                                $j++;
                                $j7++;
                                break;
                            } 
                            else if($da>=0){
                                echo "<td>";
                                echo " - ";
                                echo "</td>";
                                $j++;
                                //break 1;
                            }
                            else if($frd>=$tod){
                                break 1;
                            }
                            else {
                               
                                echo "<td>";
                                echo " - ";
                                echo "</td>";
                                $j++;
                            }
                        }

                    }

                   // echo $j;
                    $l1 = $length - 1;
                    //echo $l1;
                    //echo $length;
                   
                    if($j <= $length)
                    {
                        while ($j <= $l1) {
                            echo "<td>";
                            echo " - ";
                            echo "</td>";
                            $j++;
                        }
                    }
                    else
                    if ($j == $l1) {
                        break;
                    }
                }
                echo "<td>";
                echo $j7;
                echo "</td>";

                echo "<td>";
                echo $e1;
                echo "</td>";

                echo "</tr>";
            }

            ?>
        </table>
    </div>
</body>

</html>