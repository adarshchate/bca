<?php
session_start();
if (!isset($_SESSION['adid']) and !isset($_SESSION['adusid'])) {
    header("location:http://localhost/balajihotel/admin/admin.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Balaji Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kalam:wght@300&display=swap');

        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
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


        nav {
            /*nav bar */
            background: linear-gradient(to right, #331661 0%, #4b328d 39%, #093970 100%);
            height: 60px;
            width: 100%;
            position: fixed;
        }

        label.logo {
            /* hotel balaji*/
            color: rgb(255, 254, 239);
            font-size:24px;
            font-family: 'Vujahday Script', cursive;
            color:gold;
            line-height: 60px;
            /*padding: 0 2%;*/
            text-decoration:none;
            font-weight: bold;
            padding: 14px 15px;
            border-radius: 2px;
        }

        nav ul {
            float: right;
            margin-right: 3%;
        }

        nav ul li {
            display: inline-block;
            line-height: 60px;
            margin: 0 5px;
        }

        nav ul li a {
            color: rgb(238, 255, 236);
            font-size: 14px;
            font-family: 'Comic Sans MS';
            padding: 14px 5px;
            border-radius: 5px;

        }

        a.active,
        a:hover {
            background: #6280b8;
            transition: 1s;
        }
        .logo.active,
        .logo:hover {
            background:#070833;
            transition:0.2s;
        }

        .checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            line-height: 50px;
            margin-right: 40px;
            cursor: pointer;
            display: none;

        }

        #check {
            display: none;
        }

        .log1 {
            background-color:cadetblue;
            padding: 20.5px 10px;
            border-radius: 1px;
        }

        @media (max-width: 910px) {
            label.logo {
                font-size: 20px;
                font-family: 'Vujahday Script', cursive;
                line-height: 50px;
                padding: 0 2%;
                font-weight: bold;
                padding: 5px 10px;
                border-radius: 3px;
            }
            .log1 {
            background-color:#9b95c7;
            padding: 17px 10px;
            border-radius: 2px;
            }

            nav ul {
                float: right;
                margin-right: 2%;
            }

            nav ul li {
                display: inline-block;
                line-height: 50px;
                margin: 0 5px;
            }

            nav ul li a {
                color: rgb(238, 255, 236);
                font-size: 11px;
                font-family: 'Comic Sans MS';
                padding: 5px 3px;
                border-radius: 3px;

            }

            nav {
                background: linear-gradient(to right, #000000 0%, #070833 39%, #00141d 100%);
                height: 50px;
                width: 100%;
            }

        }

        @media (max-width: 700px) {
            .checkbtn {
                float: right;
                display: block;
            }

            img {
                width: 26px;
                height: 26px;
                margin-left: 90%;
            }

            label.logo {

                color: rgb(248, 250, 248);
                font-size: 20px;
                color:aquamarine;
                font-family: 'Vujahday Script', cursive;
                line-height: 50px;
            }

            ul {
                position: fixed;
                width: 100%;
                height: fit-content;
                background: linear-gradient(60deg, #E21143, #FFB03A);
                top: 50px;
                left: -100%;
                text-align: center;
                transition: all 1s;
            }

            nav {

                background: linear-gradient(to right, #20012c 0%, #0d0129 39%, #190130 100%);
                height: 50px;
                width: 100%;
                position: fixed;
            }

            nav ul li {
                display: block;
                margin: 50px 0;
                line-height: 3px;
            }

            nav ul li a {
                font-size: 18px;
                font-family: 'Dancing Script', cursive;
                font-family: 'Kalam', cursive;
            }

            a:hover,
            a.active {
                background: none;
                color: #57db0b;
            }

            #check:checked~ul {
                left: 0;
            }

            .log1 {
                background-color: rgba(255, 255, 255, 0);
                padding: 7px 7px;
            }
        }

        @media (max-width: 280px) {
            label.logo {
                font-size: 12px;
                padding-left: 5px;
                color:red;
            }
        }

        section {
            background: no-repeat;
            background-size: cover;
            height: 60px;
        }
    </style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">

        <label for="check" class="checkbtn">
            <img src="../img/ic.png" height="5%"> </img>
            <!-- <i class="fas fa-bars"></i>  -->
        </label>

        <a href="adpass.php"> <label class="logo"> Balaji Hotel Admin </label>  </a>

        <ul>
            <!-- <li><a class="active" href="#">Home</a></li>-->
            <li><a href="index.php">Home</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="room.php">Manage Rooms</a></li>
            <li><a href="emp.php">Employee Details</a></li>
            <li><a href="msg.php" target="_blank">Messages</a></li>
            <li><a href="logout.php" class="log1">LogOut</a></li>
        </ul>

    </nav>

    <section> </section>

</body>

</html>