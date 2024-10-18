<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>
<?php
session_start();
// $_SESSION['pkna'];  //display pakage name
$pkname = $_SESSION['pname']; // main pakage name sort
$pprice = $_SESSION['pkprice']; // pakage price

// $_SESSION['dura'];  
$tot = $_SESSION['pktotal']; // total bill
$fn = $_SESSION['first']; //first name
$ln = $_SESSION['last'];  //last name
$cno = $_SESSION['con'];  //contact number
$bdate = $_SESSION['bkdate'];  // booking traveling date
$qt = $_SESSION['qqt'];   // booking qty

$tradb = $_SESSION['dbbase'];    // this is for  database 

date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date('d-m-Y h:i A');  // time for billing receipt 

$rand = mt_rand(100, 99999); // generating radam value mt_rand is faster than the rand function
$bkid = 'AC' . $rand;  // this is the order id / booking id 


$con = makeconnection();  //db  callinng throw function include file db
$db = mysqli_select_db($con, "skytravel") or die("error in db");   //select database

$sql = "INSERT INTO `$tradb` VALUES (NULL, '$pkname', '$bkid', '$fn', '$ln', '$cno',
'$cTime', '$bdate', '$qt', '$pprice', '$tot')";   // passing all data to database 

$rs = mysqli_query($con, $sql); //query run

if ($rs > 0) {
  echo "Your Booking has been Done..! get print your bill";
} else {
  echo("technical error...! Your booking is not submitted..! ");
  header('Refresh: 3; url=http://localhost/skytravel/booking.php');
}


?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SkyTravel receipt </title>

  <style>
    #img1 {
      width: 200px;
    }

    #myTable {
      background-color: #ccffcc;
      border-collapse: collapse;
      width: 80%;
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

    .button1 {
      background-color: red;
      border: none;
      color: white;
      border-radius: 12px;
      padding: 10px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 10px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
  <!-- this script for f12 or off right key for hide views the source code -->
  <script>
    var message = "function disabled";

    function rtclickcheck(keyp) {
      if (navigator.appName == "Netscape" && keyp.which == 3) {
        alert(message);
        return false;
      }
      if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {
        alert(message);
        return false;
      }
    }
    document.onmousedown = rtclickcheck;


    document.onkeydown = function(e) {
      if (event.keyCode == 123) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
        return false;
      }
      if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
        return false;
      }
    }
  </script>

</head>

<body>

  <div class="as" align="center">


    <table border="1" id="myTable">
      <caption>
        <h1 style="font-family:Gabriola;"> Receipt </h1>
      </caption>
      <tr id="ibg">
        <th colspan="2" style="background-color:white"> <img src="ad/bill.png" id="img1"> </img> </th>
        <th colspan="3" style="text-align:left;" id="ih1"> Sky Tours & Travels in Hadapsar, Pune.<br><br>Office Address:- &nbsp; Dashmesh Society,Shop no–3,
          Nr Pranam Hotel ,Gadital,Hadapsar,Pune-411028,Maharashtra.<br>Contact:- &nbsp; +91 7097057777 sky@travel.com</th>
      </tr>

      <tr>
        <td colspan="5" style="text-align:left;">
          Name: <?php echo $_SESSION['first'], " " . $_SESSION['last']; ?> <br>
          Phone: <?php echo  $_SESSION['con']; ?> <br>
          Date: <?php echo $cTime; ?> <br>
          <b>Booking Id:- <?php echo $bkid; ?> </b><br>
        </td>
      </tr>

      <tr>
        <th> Pakage Name </th>
        <th> Booking Date </th>
        <th> Pakage Amout Per. </th>
        <th> Seat Qty </th>
        <th>Total Bill </th>
      </tr>

      <tr>
        <td> <?php echo  $_SESSION['pkna'] . "<br>";
              echo $_SESSION['dura'];   ?></td>
        <td> <?php echo  $_SESSION['bkdate']; ?> </td>
        <td> <?php echo $_SESSION['pkprice']; ?> </td>
        <td> <?php echo  $_SESSION['qqt']; ?> </td>
        <td> <?php echo $_SESSION['pktotal']; ?> </td>
      </tr>

      <tr>
        <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
        <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
        <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
        <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
        <td> <br>&nbsp; <br><br><br> <br><br><br><br><br><br>&nbsp; </td>
      </tr>

      <tr>
        <td colspan="5">Note: | if you are cancelling this booking reduce the 25% charges.. </td>
      </tr>


    </table>

    <input class="button" id="printpagebutton" type="button" value="Print Bill" onclick="printpage() " />
    <input class="button1" type="button" value="HOME" onclick="window.location.href='http://localhost/skytravel/booking.php' " />

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
      //window.location.assign("http://localhost/skytravel/booking.php")
    }
  </script>

</body>

</html>

<?php session_destroy(); ?>