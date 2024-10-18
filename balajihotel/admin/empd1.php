<?php include('nav.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room add</title>

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
            /*
            display:block;*/
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

        @media (max-width: 560px) {
            .button1 {
                padding: 7px 0px;
                background-color: dodgerblue;
                border: 1px solid #ddd;
                color: white;
                width: 95%;
                font-size: 10px;
                border-radius: 5px;
                margin-top: 10px;
                margin-left: auto;
                margin-right: 5%;
                display: block;
                cursor: pointer;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 10px 5px 25px 5px;
            }
            .form-control {
                /*TEXT FILD*/
                width: 95%;
            }
        }

        @media (max-width: 400px) {
            .form-control {
                /*TEXT FILD*/
                font-size: 10px;
                margin: 5px 5px 5px 0;
                padding: 7px;
                background-color: #fff;
                border: 1px solid #ddd;
                width: 100%;
            }

            .form-group {
                /*   LABEL*/
                font-size: 10px;
                font-family: 'Comfortaa', cursive;
                margin: 10px 5px 25px 5px;
            }
        }
        /**/
    </style>
</head>

<body>
    <div class="row">
        <h3 class="page-header"> Designation : </h3>
        <hr>
        <form class="booking" action="empd2.php" method="post">
            <div class="panel-heading">
             Check  id exists or not then add
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label> Designation id : </label> <br>
                    <input type="text" name="edid1" placeholder="Designation id" class="form-control" autocomplete="off" pattern="[^/+*'a-zA-z:]*$"  required>
                </div>
            <button class="button1" type="submit"> Check and Next</button>
            </div>
        </form>

    </div>
</body>

</html>