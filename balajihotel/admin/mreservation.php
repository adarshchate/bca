<?php

include('dbconnect.php');

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reservation</title>


    <script type="text/javascript">
        function validateForm() {
            var x = document.forms["adarsh"]["frdt"].value;
            var y = document.forms["adarsh"]["todt"].value;

            if (x == y) {
                alert("selct the correct Date");
                return false;
            } else if (x >= y) {
                alert("select correct Check-In Date");
                return false;
            } else {
                alert("fill the next form")
            }

        }
    </script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
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

        /* Set a style for all buttons */
        button {
            background-color: blue;
            color: white;
            padding: 8px 10px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 15px;
        }

        button:hover {
            opacity: 0.8;
            background-color: green;
        }


        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 2%;
        }

        .container {
            padding: 16px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #f0f2f5;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            border-radius: 5px;
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

        @media screen and (max-width: 460px) {

            img.avatar {
                width: 80%;
                border-radius: 2%;
            }

            .form-control {
                /*TEXT FILD*/
                font-size: 11px;
                width: max-content;
                vertical-align: middle;
                margin: 1px 1px 1px 0;
                padding: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 90%;
            }

            .modal-content {
                background-color: #f0f2f5;
                margin: 15% auto 5% auto;
                /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 100%;
                border-radius: 8px;
                /* Could be more or less, depending on screen size */
            }

            input[type=date] {
                width: 90%;
                height: 5px;
                padding: 18px 10px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
        }

        @media screen and (max-width: 300px) {

            input[type=date] {
                width: 100%;
                height: 5px;
                padding: 18px 20px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

        }
    </style>
</head>

<body>


    <form class="modal-content animate" name="adarsh" onsubmit="return validateForm()" method="post" action="mreserchk.php">

        <div class="imgcontainer">
            <img src="../img/mk.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <p style="font-size: 11px; color:#033740"> Maximum 2 Adults & 3 childrens allowed age 0-17.if only family room type can allowed Maximum 5 Adults & 5 childrens. </p>

            <label> Room Type: </label> <br>
            <select class="form-control" name="room" required>
                <option selected disabled value=""> Select Room Type </option>
                <?php
                $query  = "SELECT * FROM room_type WHERE rtstatus='0'";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($room_type = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $room_type['rty_id'] . '">' . $room_type['roomty'] . '</option>';
                    }
                }
                ?>
            </select><br>

            <label for="uname"><b>Check In Date:</b> </label>
            <input type="date" name="frdt" class="form-control" placeholder="mm/dd/yyyy" min="<?php echo date('d-m-Y'); ?>" required>

            <label><b> Check Out Date: </b> </label> <br>
            <input type="date" name="todt" class="form-control" placeholder="mm/dd/yyyy" min="<?php echo date('d-m-Y'); ?>" required>

            <button type="submit">Check Availability</button>
        </div>
    </form>
    </div>




</body>

</html>