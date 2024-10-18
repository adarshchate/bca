<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>
<?php
session_start();
$fn=$_POST['fname'];   //first name
$ln=$_POST['lname'];   //last name
$cnno=$_POST['conno']; //contact number

 $fr=$_SESSION['f'];  // form
 $tt=$_SESSION['t'];   //to
 $dn=$_SESSION['dn']; //day /night
 $tdate =$_SESSION['d']; //date for travel
 $busti=$_SESSION['ti'];  //bus time 
 $busn=$_SESSION['busn']; // bus no
 $bprice=$_SESSION['price'];  //price per 
 $sqty=$_SESSION['q'];  // qty seats
 $tfare=$_SESSION['total'];  //total cost

$busdb=$_SESSION['dbbase'];    // this is from to pus route for database 

date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date('d-m-Y h:i A', time());  // time for billing receipt 

$rand = mt_rand(100, 99999); // generating radam value mt_rand is faster than the rand function
$bkid = 'TR' . $rand;  // this is the order id / booking id 
 

$con=makeconnection();  //db  callinng throw function include file db
$db=mysqli_select_db($con,"skytravel") or die("error in db");   //select database


$sql="INSERT INTO `$busdb` VALUES (NULL, '$fn', '$ln', '$cnno', '$bkid', '$cTime', '$fr', 
'$tt', '$dn', '$tdate', '$busti', '$busn', '$bprice', '$sqty', '$tfare');";   // passing all data to database 

$rs=mysqli_query($con,$sql); //query run

if($rs>0)
{
  echo "Your Booking has been Done..! get print your bill";
}
else
{
  echo "technical error...! Your booking is not submitted..! ";
}


?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> SkyTravel receipt </title>


<style>
    #img1 {
        width: 200px;
    }

    #myTable {
        background-color: #ccffcc;
        border-collapse: collapse;
        width: 70%;
        font-size: 15px;
        border: 3px solid #cccc66;
    }

    #myTable th {
        background-color: #e6e1c3;
        color: back;
    }

    #myTable th,
    #myTable td {
        text-align: center;
        width: fit-content;
        padding: 2px;
    }

    #myTable tr {
        border-bottom: 1px solid black;
        border: 1px solid blueviolet;
    }

    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {
        #img1 {
            width: 50vw;
            height: auto;
        }

        #myTable {
            background-color: #ccffcc;
            border-collapse: collapse;
            width: 100%;
            height: 50%;
            font-size: 12px;
        }
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 50px;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

</head>

<body>

    <div class="as" id="canvasDiv" align="center">

        <table border="1" id="myTable">
            <caption>
                <h1 style="font-family:Gabriola;"> Receipt </h1>
            </caption>
            <tr id="ibg">
                <th colspan="3" style="background-color:white"> <img src="ad/bill.png" id="img1"> </img> </th>
                <th colspan="5" style="text-align:left;" id="ih1"> Sky Tours & Travels in Hadapsar, Pune.<br><br>Office Address:- &nbsp; Dashmesh Society,Shop no–3,
                    Nr Pranam Hotel ,Gadital,Hadapsar,Pune-411028,Maharashtra.<br>Contact:- &nbsp; +91 7097057777 sky@travel.com</th>
            </tr>

            <tr>
                <td colspan="8" style="text-align:left;">
                    Name: <?php echo $fn." ".$ln; ?> <br>
                    Phone:<?php echo $cnno; ?> <br>
                    Date: <?php echo $cTime; ?> <br>
                    <b>Booking Id:- <?php echo $bkid; ?> </b><br>
                    <b>Bus No.:- <?php echo $_SESSION['busn']; ?> </b><br>
                </td>
            </tr>

            <tr>
                <th> From </th>
                <th> TO </th>
                <th> Date </th>
                <th> Bus Time </th>
                <th> Day/Night </th>
                <th> Price per. </th>
                <th> Qty/Seats </th>
                <th> Total Bill </th>
            </tr>

            <tr>
                <td> <?php echo $_SESSION['f']; ?> </td>
                <td> <?php echo $_SESSION['t']; ?> </td>
                <td> <?php echo $_SESSION['d']; ?> </td>
                <td> <?php echo $_SESSION['ti'];  ?> </td>
                <td> <?php echo $_SESSION['dn'];  ?> </td>
                <td> <?php echo $_SESSION['price']; ?> </td>
                <td> <?php echo $_SESSION['q']; ?> </td>
                <td> <?php echo $_SESSION['total']; ?> </td>
            </tr>


            <tr>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
                <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
            </tr>

            <tr>
                <td colspan="8">Note: | if you are cancelling this booking reduce the 25% charges.. </td>
            </tr>

        </table>

        <input class="button" id="printpagebutton" type="button" value="Print Bill" onclick="printpage() " />

    </div>
    <script>
        function printpage() {
            //Get the print button and put it into a variable
            var printButton = document.getElementById("printpagebutton");
            //Set the print button visibility to 'hidden' 
            printButton.style.visibility = 'hidden';
            //Print the page content
            window.print()
            printButton.style.visibility = 'visible';
            window.location.assign("http://localhost/skytravel/booking.php")
        }
    </script>

</body>
</html>

<?php session_destroy(); ?>