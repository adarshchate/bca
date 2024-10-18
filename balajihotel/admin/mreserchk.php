<?php include('dbconnect.php'); //database connection...dbconnect.php  ?>
<?php
session_start();
// retrive the from previous form 

$rname = $_POST['room']; // get ROOM_TYPE     
$frd = date('d-m-Y', strtotime($_POST['frdt']));  // get chk-in and chk-out DATE with  convert dd mm yy 
$tod = date('d-m-Y', strtotime($_POST['todt']));

$date1 = date_create($frd); //DATE DAYS diffrence CALCULATE
$date2 = date_create($tod);
$diff = date_diff($date1, $date2);
$da = $diff->format("%R%a"); // date in + or -

if(empty($rname)) // if not set 
{
  session_destroy();
  header("Location:http://localhost/balajihotel/admin/mreservation.php");
}


$query  = "SELECT roomty,price FROM room_type WHERE rty_id=$rname"; //SELECTED ROOM_ID to get  ROOM_TYPE and PRICE
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$rmty = $row["roomty"];
$pr = $row["price"];

$tpr = $da * $pr;  // CALCULATE total days * price 

/*--------------------------------------------------------*/

/* data validation for Room numbers IN ROOMS */
$query  = "SELECT rno FROM rooms WHERE rty_id=$rname AND status='0'";    //get ROOM_ID to get room type rooms RNO 
$result = mysqli_query($con, $query);

$r = $result;
$rowcount = mysqli_num_rows($r);

if (mysqli_num_rows($result) > 0) {
    while ($room_type = mysqli_fetch_assoc($result)) {
        //echo '<option value="' . $room_type['rno'] . '">' . $room_type['rno'] . '</option>';
        $re1[] = $room_type['rno'];  //stored data in array  keys and values  ROOMS No
    }
}
/*--------------------------------------------------------*/

/*
$r = "SELECT rooms.rno FROM rooms JOIN bookings ON rooms.rno = bookings.rno WHERE  
(ckindate <= '$frd' AND ckoutdate >= '$frd') OR
(ckindate <= '$tod' AND ckoutdate >= '$tod') OR
(ckindate >= '$frd' AND ckoutdate <= '$tod')";
*/
/* get data From bookings  */
$r = "SELECT rno FROM bookings WHERE bookings.rty_id=$rname AND ((ckindate <= '$frd' AND ckoutdate >= '$frd') 
OR (ckindate <= '$tod' AND ckoutdate >= '$tod') OR (ckindate >= '$frd' AND ckoutdate <= '$tod'))";

$res = mysqli_query($con, $r);

if (mysqli_num_rows($res) > 0) {
    while ($ro = mysqli_fetch_assoc($res)) {
        echo " <br> ";
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


$_SESSION['rtyid'] = $rname; // rty id
$_SESSION['fdate'] = $frd; // chk-in date
$_SESSION['tdate'] = $tod; // chk-out date
$_SESSION['tdays'] = $da; // chk-in chk-out date days calculate
$_SESSION['pkna'] = $rmty; // Room Type
$_SESSION['pkprice'] = $pr; // Room Type Price
$_SESSION['pktotal'] = $tpr; // Calculated total price

?>

<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reservation</title>

   
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

      .form-control {
            /*TEXT FILD*/
            font-size: 14px;
            width: max-content;
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fffeed;
            border: 1px solid #ddd;
            width: 60%;
        }

        .abc {
            padding-top: 12px;

        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .container {
            padding: 5px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 20% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 99%;
            /* Could be more or less, depending on screen size */
        }

        .animate {
            animation: animatezoom 0.6s
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
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
            background-color: palegoldenrod;
        }

        tr:nth-child(odd) {
            background-color: teal;
            color: #fff;
        }


        @media only screen and (max-width: 610px) {
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

        @media only screen and (max-width: 420px) {
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

            button {
                background-color: #4CAF50;
                color: white;
                padding: 5px 2px;
                margin: 11px 0;
                width: 100%;
                border: none;
                border-radius: 12px;
                cursor: pointer;
            }

            .form-control {
                /*TEXT FILD*/
                font-size: 11px;
                width: max-content;
                vertical-align: middle;
                margin: 3px 2px 3px 0;
                padding: 4px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 90%;
            }
            
        }
    </style>

</head>

<body>
    <form class="modal-content animate" method="post" action="mresercust.php">
        <div class="container">
            <h3 align="center"> Availability </h3>
            <hr />
            <table>
                <tr>
                    <th> Pakage Name </th>
                    <th> check in date </th>
                    <th> check out date </th>
                    <th> Total days </th>
                    <th> Price </th>
                    <th> Total </th>
                </tr>

                <tr align="center">
                    <td> <?php echo $_SESSION['pkna']; ?> </td>
                    <td> <?php echo $_SESSION['fdate']; ?> </td>
                    <td> <?php echo $_SESSION['tdate']; ?> </td>
                    <td> <?php echo $_SESSION['tdays']; ?> </td>
                    <td> <?php echo $_SESSION['pkprice']; ?> </td>
                    <td> <?php echo $_SESSION['pktotal']; ?> </td>
                </tr>
            </table>


            <div class="abc">
                <label> Select available room: </label> <br>
                <select class="form-control" name="roomno" onchange="fetch_room(this.value);" required>
                    <option selected disabled value=""> Select Room Type </option>
                    <?php /*
                    $query  = "SELECT rno FROM rooms WHERE rty_id=$rname ";
                    $result = mysqli_query($con, $query);*/
                    if (!empty($resul)) {
                        foreach ($resul as  $value) {
                            echo "<option value=$value> $value </option>";
                        }
                    } else {
                        echo '<script>alert("sorry! rooms are not availabe.. Select another Rooms DATE OR ROOM TYPE..  ")</script>';
                        echo "( 
                            <script type='text/javascript'>
                             setTimeout(function(){
                            window.history.back();
                          }, 8000);
                          </script> )";
                    }
                    ?>
                </select><br>


                <label> Select ID Card: </label> <br>
                <select class="form-control" name="cardty" required>
                    <option selected disabled value=""> Select Room Type </option>
                    <?php
                    $query  = "SELECT * FROM id_card_type";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($cardid = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $cardid['icard_id'] . '">' . $cardid['icard_type'] . '</option>';
                        }
                    }
                    ?>
                </select><br>

            </div>
            <button type="submit">NEXT</button>
    </form>
    </div>
</body>

</html>