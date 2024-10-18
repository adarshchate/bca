<?php include('nav.php'); ?>

<?php include('dbconnect.php'); 
$_SESSION['asdf']=1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Emp</title>

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
                width: 98%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 5px 10px 5px 0;
            }

            .button1 {
                padding: 5px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                border-radius: 5px;
                width: 98%;
                margin-top: 30px;
                margin-left: auto;
                margin-right: 5%;
                display: block;
                cursor: pointer;
            }
        }

        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Add Employee </h3>
        <hr>
        <form class="booking" action="empadd1.php" method="post">
            <div class="panel-heading"> Add Employee Information:
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label> First Name :</label> <br>
                    <input type="text" name="usn1" class="form-control" placeholder="First Name" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label> Last Name :</label> <br>
                    <input type="text" name="usn2" class="form-control" placeholder="Last Name" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label> Phone : </label> <br>
                    <input type="text" name="usnum1" class="form-control" autocomplete="off" placeholder="Mobile Number" minlength="10" required>
                </div>
                <div class="form-group">
                    <label> Email :</label> <br>
                    <input type="text" name="usn3" class="form-control" placeholder="Email" autocomplete="off" required>
                </div>

                <div class="form-group ">
                    <label>ID Type: </label> <br>
                    <select class="form-control" name="id2" required>
                        <option selected disabled value=""> ID Type </option>
                        <?php
                        $query  = "SELECT * FROM id_card_type";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($room_type = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $room_type['icard_id'] . '">' . $room_type['icard_type'] . '</option>';
                            }
                        }
                        ?>
                    </select><br>
                    <div class="form-group">
                        <label> Id Number :</label> <br>
                        <input type="text" name="id3" class="form-control" placeholder="id Number" autocomplete="off" required>
                    </div>
                    <label> Designation Type : </label> <br>
                    <select class="form-control" name="ds3" required>
                        <option selected disabled value=""> Designation </option>
                        <?php
                        $query  = "SELECT * FROM empdgon";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($room_type = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $room_type['edname'] . '">' . $room_type['edname'] . '</option>';
                            }
                        }
                        ?>
                    </select><br>
                    <div class="form-group">
                        <label> Address :</label> <br>
                        <input type="text" name="add3" class="form-control" placeholder="address" autocomplete="off" required>
                    </div>
                    <button class="button1" type="submit">Submit</button> <br>

                </div>
        </form>
    </div>
</body>

</html>