<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$r1 = $_POST['empd'];
//echo $r1;
$_SESSION['empd'] = $r1;

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
        <h3 class="page-header"> Update  </h3>
        <hr>
        <form class="booking" action="empdup3.php" method="post">
            <div class="panel-body">
                <div class="form-group">
                    
                <?php
                    $query  = "SELECT * FROM empdgon where edid='$r1'";
                    $result1 = mysqli_query($con, $query);
                    $ro1 = mysqli_fetch_assoc($result1);
                    echo "<br>";
                    echo "Designation id: " . $ro1['edid'] . "<br>";
                    echo "Designation Name: " . $ro1['edname'] . "<br>";
                    echo "Designation Salary: " . $ro1['esalary'] . "<br>";
                    if ($ro1['edstatus'] == 0)
                        echo "Designation Status : Availabe <br> <br>";
                    else if ($ro1['edstatus'] == 1)
                        echo "Designation Status : Unavailabe <br> <br>";

                    ?>
                    <div class="form-group">
                        <label> Designation Name : </label> <br>
                        <input type="text" name="xx4" class="form-control" placeholder="Enter Designation Name" autocomplete="off" pattern="[^/+*'0-9:]*$" >
                    </div> 
                    <div class="form-group">
                        <label> Designation Salary : </label> <br>
                        <input type="text" name="xx5" class="form-control" placeholder="Designation Salary" autocomplete="off" pattern="[^/+*'a-zA-z:]*$" >
                    </div>
                    <div class="form-group">
                    <?php if ($ro1['edstatus'] == 0) { ?> 
                        <input type='radio' style="height: 20px; width:25px; vertical-align: middle;" name='xx6' value='4'>Unavailable now<br>
                        <?php } else { ?>
                        <input type='radio' style="height: 20px; width:25px; vertical-align: middle;" name='xx6' value='3'>Available now<br>
                        <?php } ?>
                        </div>
                </div>
                <button class="button1" type="submit"> Update Now</button>
            </div>
        </form>
    </div>
</body>

</html>