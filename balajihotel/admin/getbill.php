<?php
include('dbconnect.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>

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
            background-color: wheat;
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

        .btn-secondary {
            /*make replan button */
            float: right;
            text-decoration: none;
            font-size: 16px;
            margin-right: 12px;
            background-color: #d9d9d9;
            color: #000000;
            padding: 2px 6px 2px 6px;
            border-top: 1px solid #CCCCCC;
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
            border-left: 1px solid #CCCCCC;
        }

        .panel-body {
            /*next div */
            padding-top: 22px;
            padding-left: 12px;
            background-color: #ffbc05;
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
            margin-left:auto;
            margin-right: auto;
            display:block;
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
            padding: 8px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            border-radius: 25px;
            margin-top: 10px;
            margin-left:auto;
            margin-right: auto;
            display:block;
            cursor: pointer;

        }

        }

        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> fill up the following form to get your bookings info. </h3>
        <hr>
        <form class="booking"  action="getbill1.php" method="post">
            <div class="panel-heading"> User Information:
                <a class="btn-secondary" href="getbill.php" > Replan Booking </a> <br>
            </div>

            <div class="panel-body">
                <div class="form-group">
                    <label>Enter your first name </label> <br>
                    <input type="text" name="usn" class="form-control" placeholder="enter name" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Enter your phone number </label> <br>
                    <input type="text" name="usnum" class="form-control" autocomplete="off" placeholder="Mobile Number" minlength="10" required>
                </div>
                <div class="form-group ">
                    <label>Room Type: </label> <br>
                    <select class="form-control" name="room" required>
                <option selected disabled value=""> Select Room Type </option>
                <?php
                $query  = "SELECT * FROM room_type";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($room_type = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $room_type['rty_id'] . '">' . $room_type['roomty'] . '</option>';
                    }
                }
                ?>
                </select><br>
                <button class="button1" type="submit">Check</button>
            </div>
        </form>
      
    </div>
</body>

</html>