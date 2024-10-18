<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>

<?php
session_start();

$fname = $_POST['fn'];  // get first name 
if(empty($fname)) // if not set 
{
    session_destroy();
    header("Location:http://localhost/balajihotel/admin/mreservation.php");
}

$lastn = $_POST['ln']; // get last name
$cnum = $_POST['cno']; // get customer number
$eml = $_POST['emid']; // get email id
$addr = $_POST['adr']; // get address
$cuid = $_POST['cidt']; // get customer id 

$cit=$_SESSION['cardi'];  // get card id type
$roomn=$_SESSION['roomno']; // get Room Number

$rid=$_SESSION['rtyid'];// get rromtype id
$pkn=$_SESSION['pkna']; // get room type 
$ckdt=$_SESSION['fdate']; // get check_in date
$ckot=$_SESSION['tdate'];   // get check-out date
$tdt=$_SESSION['tdays']; // get total days
$pkp=$_SESSION['pkprice']; // get room price
$pkt=$_SESSION['pktotal']; // get room and total days price

$bookid=$_SESSION['bkid']; // get booking Id for invoce

if(!isset($cTime)){ 
date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date('d-m-Y h:i A');  // time for billing receipt 
}

if(isset($_SESSION['bkid']) and isset($_SESSION['roomno']))
{
$query  = "INSERT INTO `customer` (`cid`, `fname`, `lname`, `ph_no`, `email`, `icard_id`, `id_number`, `createdate`, `invnum`, `address`) 
VALUES (NULL, '$fname', '$lastn', '$cnum', '$eml', '$cit', '$cuid', '$cTime', '$bookid', '$addr');";    //get ROOM_ID to get room type rooms RNO 
$resul = mysqli_query($con, $query);




$query  = "SELECT cid FROM customer WHERE invnum='$bookid'"; //get customer id ref for invo.id
$result = mysqli_query($con, $query);


$row = mysqli_fetch_array($result);
$ccid=$row['cid'];
/*
$query  = "INSERT INTO `bookings` (`bid`, `cid`, `rno`, `rty_id`, `bdate`, `ckindate`, `ckoutdate`, `tprice`, 
`remprice`, `paystatus`, `invno`, `bkstatus`) 
VALUES (NULL, '$ccid', '$roomn', '$rid', '$cTime', '$ckdt', '$ckot', '$pkt', '0', '0', '$bookid', '0');";    //get ROOM_ID to get room type rooms RNO 
*/
$query  = "INSERT INTO `bookings` (`bid`, `cid`, `rno`, `rty_id`, `bdate`, `ckindate`, `ckoutdate`, 
`pkprice`, `nofday`, `tprice`, `remprice`, `paystatus`, `invno`, `bkstatus`) VALUES (NULL, '$ccid', '$roomn', '$rid', '$cTime', '$ckdt', '$ckot',
'$pkp', '$tdt', '$pkt', '0', '0', '$bookid', '0')";

$result = mysqli_query($con, $query);

session_destroy();
}
else
{
    header("Location:http://localhost/balajihotel/admin/mreservation.php");
    
}


/*
$sql = "INSERT INTO `$tradb` VALUES (NULL, '$pkname', '$bkid', '$fn', '$ln', '$cno',
'$cTime', '$bdate', '$qt', '$pprice', '$tot')";   // passing all data to database 

$rs = mysqli_query($con, $sql); //query run
/*
if ($rs > 0) {
  echo "Your Booking has been Done..! get print your bill";
} else {
  echo("technical error...! Your booking is not submitted..! ");
  header('Refresh: 3; url=http://localhost/skytravel/booking.php');
}
*/

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> receipt </title>

  <style>
    #img1 {
      width: 200px;
    }

    #myTable {
      background-color: #edffee;
      border-collapse: collapse;
      width: 90%;
      font-size: 15px;
      border: 1.5px solid #3d3d3d;
    }

    #myTable th {
      background-color:#fff5f5;
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
      border: 1px solid black;
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
      background-color: #70e07b;
      border: none;
      color: white;
      border-radius: 50px;
      padding: 12px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      margin: 44px 8px;
      cursor: pointer;
    }

    .button1 {
      background-color:#96cbff;
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

</head>
<body>

  <div class="as" align="center">


    <table border="1" id="myTable">
      <caption>
        <h1 id="a1" style="font-family:Gabriola;"> Invoice </h1>
      </caption>
      <tr id="ibg">
        <th colspan="2" style="background-color:white"> <img src="../img/bh.png" id="img1"> </img> </th>
        <th colspan="3" style="text-align:left;" id="ih1">  Balaji Hotel <br> <br>Address:- &nbsp; 52,Pune-Solapur Rd,indraprashtha Society,Hadapsar,Pune-411028,Maharashtra.
        <br>Contact:- &nbsp; +91 7097057777 <br> <a href="http://balajihotel.rf.gd" style="text-decoration: none; color:black"> balajihotel.com </a> </th>
      </tr>

      <tr>
        <td colspan="5" style="text-align:left;">
          Name: <?php echo $fname, " " .$lastn; ?> <br>
          Phone: <?php echo $cnum; ?> <br>
          Date: <?php echo $cTime; ?> <br>
          Check-In: <?php echo $ckdt; ?> <br>
          Check-Out: <?php echo $ckot; ?> <br>
          <b>Invoice No:- <?php echo $bookid; ?> </b><br>
        </td>
      </tr>

      <tr>
        <th> Room Type </th>
        <th> Room No. </th>
        <th> Room Price </th>
        <th> Number of Days </th>
        <th> Total Bill </th>
      </tr>

      <tr>
        <td> <?php echo $pkn; ?></td>
        <td> <?php echo $roomn; ?> </td>
        <td> <?php echo $pkp; ?> </td>
        <td> <?php echo $tdt; ?> </td>
        <td> <?php echo $pkt; ?> </td>
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
    <input class="button1" id="hbutton" type="button" value="HOME" onclick="window.location.href='http://localhost/balajihotel' " />

  </div>
  <script>
    function printpage() {
      //Get the print button and put it into a variable
      var printButton = document.getElementById("printpagebutton");
      var hoButton = document.getElementById("hbutton");
      var t1 = document.getElementById("a1");

      //Set the print button visibility to 'hidden' 
      printButton.style.visibility = 'hidden';
      hoButton.style.visibility = 'hidden';
      t1.style.visibility = 'hidden';
      //Print the page content
      window.print()
      printButton.style.visibility = 'visible';
      hoButton.style.visibility = 'visible';
      t1.style.visibility = 'visible';
      //window.location.assign("http://localhost/skytravel/booking.php")
    }

  </script>

</body>

</html>

