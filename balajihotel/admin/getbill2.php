<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>

<?php
session_start();

$inum = $_POST['inv'];  // get invoice num

$fn=$_SESSION['u']; //name
$cusn=$_SESSION['un']; //number
$rrt=$_SESSION['rt']; //room ty


$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

/*
$sql = "SELECT customer.cid,customer.fname,customer.lname,bookings.bdate,bookings.ckindate,
bookings.ckoutdate,customer.invnum FROM customer JOIN bookings ON customer.cid=bookings.cid WHERE
(customer.fname='adarsh' AND customer.ph_no='7097057777') AND bookings.rty_id='1'";   //show all data 

SELECT customer.fname,customer.lname,customer.ph_no,bookings.bdate,bookings.ckindate,
bookings.ckoutdate,customer.invnum,bookings.rno,customer., FROM customer JOIN bookings ON customer.cid=bookings.cid WHERE
(customer.fname='adarsh' AND customer.ph_no='7097057777') AND bookings.rty_id='4'"; */


$sql = "SELECT customer.fname,customer.lname,customer.ph_no,bookings.bdate,bookings.ckindate,
bookings.ckoutdate,bookings.rno,bookings.pkprice,bookings.nofday,bookings.tprice,customer.invnum,room_type.roomty FROM customer JOIN bookings JOIN room_type ON (customer.cid=bookings.cid) AND (bookings.rty_id=room_type.rty_id)
WHERE (customer.fname='$fn' AND customer.ph_no='$cusn') AND (bookings.rty_id='$rrt' AND customer.invnum='$inum')";
$rs = mysqli_query($con, $sql); //query run

$row = mysqli_fetch_assoc($rs);
if($inum!=$row['invnum']) // if not set 
{
    header("Location:http://localhost/balajihotel/admin/getbill1.php");
}

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> invoice </title>

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
          Name: <?php echo $row['fname'], " " .$row['lname']; ?> <br>
          Phone: <?php echo $row['ph_no']; ?> <br>
          Date: <?php echo $row['bdate']; ?> <br>
          Check-In: <?php echo $row['ckindate']; ?> <br>
          Check-Out: <?php echo $row['ckoutdate']; ?> <br>
          <b>Invoice No:- <?php echo $row['invnum']; ?> </b><br>
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
        <td> <?php echo $row['roomty']; ?></td>
        <td> <?php echo $row['rno']; ?> </td>
        <td> <?php echo $row['pkprice']; ?> </td>
        <td> <?php echo $row['nofday']; ?> </td>
        <td> <?php echo $row['tprice']; ?> </td>
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
<?php session_destroy(); session_abort(); ?>
