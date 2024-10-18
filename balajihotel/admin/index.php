<?php 
include('nav.php');
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");

$sql = "SELECT rty_id FROM room_type WHERE rtstatus='0'";
$rs = mysqli_query($con, $sql);
$c1 = mysqli_num_rows($rs);

$sql = "SELECT rid FROM rooms WHERE status='0'";
$rs = mysqli_query($con, $sql);
$c2 = mysqli_num_rows($rs);

/********************************************************************** */
$query  = "SELECT rno FROM rooms WHERE status='0'";    //get rooms rno
$result = mysqli_query($con, $query);

$r = $result;
$rowcount = mysqli_num_rows($r);

if (mysqli_num_rows($result) > 0) {
    while ($room_type = mysqli_fetch_assoc($result)) {
        $re1[] = $room_type['rno'];  //stored data in array keys and values  ROOMS No
    }
}

date_default_timezone_set('Asia/Kolkata'); //getting current time
$eaTime = date('d-m-Y h:i A');  // time 

$frd = date('d-m-Y', strtotime($eaTime));  // get chk-in and chk-out DATE with  convert dd mm yy 
$tod = date('d-m-Y', strtotime($eaTime));

$date1 = date_create($frd); //DATE DAYS diffrence CALCULATE
$date2 = date_create($tod);
$diff = date_diff($date1, $date2);
$da = $diff->format("%R%a"); // date in + or -

$r = "SELECT rno FROM bookings WHERE ((ckindate <= '$frd' AND ckoutdate >= '$frd') OR
(ckindate <= '$tod' AND ckoutdate >= '$tod') OR
(ckindate >= '$frd' AND ckoutdate <= '$tod'))";    //rooms number availa

$res = mysqli_query($con, $r);

if (mysqli_num_rows($res) > 0) {
    while ($ro = mysqli_fetch_assoc($res)) {
        $re2[] = $ro['rno']; //stored data in array  keys and values  ROOMS No
    }
    //print_r($re1); //result arr1
    //echo " <br> ";
    //print_r($re2); //result arr1
    $resul = array_diff($re1, $re2);
    //echo " <br><br> ";
    //print_r($resul);
} else {
    $resul = $re1;
}

/********************************************************************** */

$sql = "SELECT eid FROM empdetail WHERE edname='Restaurant Manager' AND estatus='0'";
$rs = mysqli_query($con, $sql);
$c4 = mysqli_num_rows($rs);

$sql = "SELECT eid FROM empdetail WHERE edname<>'Restaurant Manager' AND estatus='0'";
$rs = mysqli_query($con, $sql);
$c5 = mysqli_num_rows($rs);

$sql = "SELECT empdgon.esalary FROM empdetail JOIN empdgon ON(empdetail.edname=empdgon.edname) WHERE estatus='0'";
$rs1 = mysqli_query($con, $sql);
//$c6 = mysqli_num_rows($rs);
if (mysqli_num_rows($rs1) > 0) {

    while ($row1 = mysqli_fetch_assoc($rs1)) {
        if (!isset($cc)) {
            $cc = 0;
        }
        $cs = $row1['esalary'];
        $cc = $cc + $cs;
        $ct = $cc;
    }
}

$sql = "SELECT pkprice FROM bookings WHERE bkstatus='0'";
$rs2 = mysqli_query($con, $sql);
//$c6 = mysqli_num_rows($rs);

if (mysqli_num_rows($rs2) > 0) {
    while ($row = mysqli_fetch_assoc($rs2)) {
        if (!isset($cc1)) {
            $cc1 = 0;
        }
        $cs1 = $row['pkprice'];
        $cc1 = $cc1 + $cs1;
        $ct1 = $cc1;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index </title>
    <style>
        body {
            background-image: url("../img/adminh.jpg");
            background-color: #cccccc;
        }

        table,
        tr,
        td {
            background: transparent;
            color: white;
            text-align: center;
            font-size: 24px;
        }

        th {
            background-color: rgba(44, 122, 116,0.9);
            padding: 8px;
            padding-top: 10px;
        }

        td {
            background-color: rgba(29, 66, 63, 0.9);
            padding: 20px;

        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            width: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            border: 1px solid red;
        }

        @media screen and (max-width: 701px) {
            table {
                border-spacing: 0;
                border-collapse: collapse;
                width: 100%;
                margin-left: auto;
                margin-right: auto;
                margin-top: -8px;
            }

            th {
                padding: 8px;
                margin-left: 1px;
                text-align: left;
            }

            td {
                padding: 5px;
                font-size: 12px;
            }

            .iga1 {
                width: 30%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .iga2 {
                width: 10%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="table_wrappe">
        <table>
            <tr>
                <th><img src="./imgad/roomsty.png" alt="Room Type" class="iga1" width="70" height="70"> </th>
                <th><img src="./imgad/rooms1.png " alt="All Rooms" class="iga1" width="70" height="70"> </th>
                <th><img src="./imgad/availabity.png " alt="Rooms available" class="iga1" width="80" height="50"> </th>
            </tr>

            <tr>
                <td> <?php echo $c1 . " Room Type "; ?> </td>
                <td> <?php echo $c2 . " Rooms "; ?> </td>
                <td> <?php echo count($resul) . " Available Rooms "; ?> </td>
            </tr>

            <tr>
                <th><img src="./imgad/manager.png " alt="Manager" class="iga1" width="70" height="50"> </th>
                <th><img src="./imgad/employee.png " alt="employee" class="iga1" width="50" height="60"> </th>
                <th><img src="./imgad/pay.png " alt="payments" class="iga1" width="80" height="60"> </th>
            </tr>

            <tr>
                <td> <?php echo $c4 . " Manager"; ?> </td>
                <td> <?php echo $c5 . " Employees"; ?> </td>
                <td> <?php echo $ct . " Total Salaries/m."; ?> </td>
            </tr>

            <tr>
                <th colspan="3"> <img src="./imgad/earnings.png " alt="earnings" class="iga2" width="70" height="60"> </th>
            </tr>
            <tr>
                <td colspan="3"> <?php echo $ct1 . " Total Earnings"; ?> </td>
            </tr>

        </table>
    </div>
</body>

</html>