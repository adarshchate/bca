<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$r1 = $_POST['ea1'];
//echo $r1;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
            background-color: #449dad;
            width: 100%;
            height: 700px;
            padding-top: 20px;
            margin-top: -10px;
            padding-bottom: 50px;
        }

        .page-header {
            /* reservation align */
            text-align: center;
        }

        .panel-heading {
            font-size: 20px;
            text-decoration: none;
            color: #000000;
            padding-bottom: 10px;
            padding-top: 10px;
            margin-left: 34px;
        }

        .panel-body {
            /*next div */
            padding-top: 22px;
            padding-left: 12px;
            background-color: #9fbecf;
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

        button:hover {
            background-color: royalblue;
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
        }

        @media (max-width: 400px) {
            .form-control {
                /*TEXT FILD*/
                font-size: 10px;
                margin: 5px 5px 5px 0;
                padding: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 85%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 5px 10px 5px 0;
            }


            .button1 {
                padding: 6px 25px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                width: 90%;
                font-size: 10px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;

            }
        }

        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Update </h3>
        <hr>
        <form class="booking" action="empattend3.php" method="post">
            <div class="panel-body">
                <div class="form-group">

                    <?php
                    $query  = "SELECT empdetail.eid,empdetail.efname,empdetail.elname,empdetail.eph_no,empdetail.edname,
                   empdetail.estatus FROM empdetail JOIN empdgon JOIN id_card_type 
                   ON (empdetail.icard_id=id_card_type.icard_id) AND (empdetail.edname=empdgon.edname) WHERE eid='$r1'";
                    $result = mysqli_query($con, $query);
                    $ro1 = mysqli_fetch_assoc($result);

                    date_default_timezone_set('Asia/Kolkata'); //getting current time
                    $eaTime = date('d-m-Y h:i A');  // time 

                    $q1  = "SELECT MAX(achkdate) FROM empattend WHERE empattend.eid='$r1'"; // get max date
                    $rs1 = mysqli_query($con, $q1);
                    $ras2 = mysqli_fetch_assoc($rs1);
                    $da = $ras2['MAX(achkdate)'];
                    //echo "<br>".$da;
                    //$h1=7;
                    $count1 = mysqli_num_rows($rs1);
                    

                    if($count1>0) {
                    // echo $count1;
                    $datetime1 = new DateTime($da);
                    $datetime2 = new DateTime($eaTime);
                    $interval = $datetime1->diff($datetime2);
                    //echo $interval->format('%a') . " days <br>";
                    $h2=$interval->format('%a');
                    //echo $interval->format('%R%h') . " Hours " . $interval->format('%i') . " Minutes";

                    $h1 = $interval->format('%R%h');
                    //echo "<br><br>" . $h1;
                    }
                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                            
                            $_SESSION['ea1'] = $r1;
                            $_SESSION['achti'] = $eaTime;
                            echo "<br>";
                            echo "id: " . $ro1['eid'] . "<br>";
                            echo "FName: " . $ro1['efname'] . "<br>";
                            echo "LName: " . $ro1['elname'] . "<br>";
                            echo "Ph.No: " . $ro1['eph_no'] . "<br>";
                            echo "Designation: " . $ro1['edname'] . "<br>";

                            if(!empty($ras2['MAX(achkdate)']))
                            {      
                                if ($h1 >= 15) 
                                {
                                    echo " ";
                                }
                                else if ($h2>=1) 
                                {
                                    echo " ";
                                }
                                else
                                {
                                    echo "<br> The Employee Presented already.. <br>";
                                    echo $interval->format('%h') . " Hours " . $interval->format('%i') . " Minutes";
                                    echo " - Before <br>";
                                    exit;
                                }
                            }

                            echo "Status: ";
                            if ($ro1['estatus'] == 0) {
                                echo "<p style='color:green;'> Join </p> <br>";
                    ?>
                                <button class="button1" type="submit"> Present </button>

                    <?php } else 
                   if ($ro1['estatus'] == 1) {
                                echo "<p style='color:red;'> Removed </p> <br>";
                            }
                        }

                         else {
                            echo "emp no is not available";
                        }
                    ?>
                </div>
        </form>
    </div>
</body>

</html>