<?php include('nav.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation data</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap');

        * {
            box-sizing: border-box;
        }

        .row {
            background: rgb(34, 193, 195);
            background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(253, 205, 45, 1) 100%);
            width: 100%;
            height: 700px;
            padding-top: 20px;
            margin-top: -10px;
            padding-bottom: 30px;
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
            padding-top: 50px;
            padding-left: 15px;
            background-color: #ffbc05;
            padding-bottom: 50px;
            background-color: #ffac1c;
        }

        p {
            padding-left: 10%;
            padding-right: 5%;
        }

        .button1 {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
            /*
            display:block;*/
            cursor: pointer;
        }
        .button2 {
            padding: 10px 20px;
            background-color:#32a852;
            border: 1px solid #ddd;
            color: white;
            border-radius: 8px;
            margin-left: auto;
            margin-right: auto;
            /*
            display:block;*/
            cursor: pointer;
        }
        button:hover {
            background-color: royalblue;
        }

        @media (max-width: 1035px) {
            p {
                padding-left: 3%;
                padding-right: 2%;
            }
        }

        @media (max-width: 910px) {
            p {
                padding-left: 0%;
                padding-right: 0%;
            }
            .button1 {
                padding: 8px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                width: 50%;
                font-size: 11px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
            .button2 {
                padding: 8px 20px;
                background-color: #32a852;
                border: 1px solid #ddd;
                color: white;
                width: 50%;
                font-size: 11px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
        }

        @media (max-width: 780px) {
            .button1 {
                padding: 8px 20px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                width: 100%;
                font-size: 11px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }
            .button2 {
                padding: 8px 20px;
                background-color: #9000de;
                border: 1px solid #ddd;
                color: white;
                width: 100%;
                font-size: 11px;
                border-radius: 25px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                cursor: pointer;
            }

            p {
                padding-left: 0%;
                padding-right: 3%;
            }
            .panel-body {
                /*next div */
                padding-bottom: 100px;
                padding-top: 80px;

            }

        }

        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Reservation Data Choose: </h3>
        <hr>
        <form class="booking" action=" " method="post">
            <div class="panel-heading">
                <!--select: -->
            </div>
            <div class="panel-body">


                <p> <button class="button1" onclick="javascript:window.open('reservation1.php','_blank')"> Show Reservations</button>
                    <button class="button2" onclick="javascript:window.open('reservationc1.php','_blank')"> Paid Cancellations Status </button>
                    <button class="button1" onclick="javascript:window.open('reserunpaid.php','_blank')"> Unpaid Cancellations </button>
                    <button class="button2" onclick="javascript:window.open('paycheck.php','_blank')"> Pay Return Aamount - Cancellations </button>
                </p>
            </div>
        </form>

    </div>
</body>

</html>