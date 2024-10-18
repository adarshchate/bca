<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$r5=$_POST['e12'];

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
        <h3 class="page-header"> fill the required fields for update  </h3>
        <hr>
        <form class="booking" action="empdelete2.php" method="post">
            <div class="panel-body">
                <div class="form-group"> 
                <?php
                    $query  = "SELECT empdetail.eid,empdetail.efname,empdetail.elname,empdetail.eph_no,empdetail.eemail, 
                    id_card_type.icard_type,empdetail.eid_number,empdetail.createdate,empdetail.edname,empdgon.esalary,
                    empdetail.eaddress,empdetail.estatus FROM empdetail JOIN empdgon JOIN id_card_type 
                    ON (empdetail.icard_id=id_card_type.icard_id) AND (empdetail.edname=empdgon.edname) WHERE eid='$r5'";
                    $result = mysqli_query($con, $query);
                    $ro1 = mysqli_fetch_assoc($result);

                    $count=mysqli_num_rows($result);
                    if($count>0)
                    {
                    echo "<br>";
                    $_SESSION['e12']=$r5; //
                    echo "id: " . $ro1['eid'] . "<br>";
                    echo "FName: " . $ro1['efname'] . "<br>";
                    echo "LName: " . $ro1['elname'] . "<br>";
                    echo "Ph.No: " . $ro1['eph_no'] . "<br>";
                    echo "Email: " . $ro1['eemail'] . "<br>";
                    echo "ID: " . $ro1['icard_type'] . "<br>";
                    echo "ID No: " . $ro1['eid_number'] . "<br>";
                    echo "Created Date: " . $ro1['createdate'] . "<br>";
                    echo "Designation: " . $ro1['edname'] . "<br>";
                    echo "Salary: " . $ro1['esalary'] . "<br>";
                    echo "Address: " . $ro1['eaddress'] . "<br>";
                    echo "Status: ";
                    if($ro1['estatus']==0)
                    echo "<p style='color:green;'> Join </p> <br>";
                    else if($ro1['estatus']==1)
                    echo "<p style='color:red;'> Removed </p> <br>";
                    ?>
                </div>
                
                <button class="button1" type="submit"> Delete Now</button>
                <?php }  
                    else
                    echo " Employee id Is Not Available plz.check again <br>"; 
                ?>
            </div>
        </form>
    </div>
</body>

</html>