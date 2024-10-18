<?php include('dbconnect.php'); //database connection...dbconnect.php  
?>

<?php
session_start();

$rno = $_POST['roomno'];  // get room number 
$cty = $_POST['cardty']; // get id card type id

if(empty($rno)) // if not set 
{
  session_destroy();
  unset($_POST['room']);
  header("Location:http://localhost/balajihotel/admin/mreservation.php");
}


$query  = "SELECT icard_type FROM id_card_type where icard_id=$cty";    //get ROOM_ID to get room type rooms RNO 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

//$row['icard_type'];

$rand = mt_rand(100, 99999); // generating radam value mt_rand is faster than the rand function

$_SESSION['bkid'] ='inv' . $rand; // this is the order id / booking id 

$_SESSION['cardi'] = $cty;
$_SESSION['roomno'] = $rno;

$_SESSION['pkna'];
$_SESSION['fdate'];
$_SESSION['tdate'];
$_SESSION['tdays'];
$_SESSION['pkprice'];
$_SESSION['pktotal'];



?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>reservation</title>


  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f7faff;
    }

    /* Full-width input fields */
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type=number] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* hiding a number arrows */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Set a style for all buttons */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 14px;
    }

    button:hover {
      opacity: 0.8;
    }


    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 5px;

    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
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

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #fff5f5;
    }

    tr:nth-child(odd) {
      background-color: #ffe0e0;
    }


    @media only screen and (max-width: 610px) {
      table {
        border-collapse: collapse;
        width: 100%;
        height: auto;
        border: 1px solid #ddd;
        font-size: 12px;
      }

      th,
      td {
        text-align: left;
        padding: 1px;
      }
    }

    @media only screen and (max-width: 420px) {
      table {
        border-collapse: collapse;
        width: 100%;
        height: fit-content;
        border: 0.1px;
        font-size: 10px;
      }

      th,
      td {
        text-align: left;
        padding: 1px;
      }

      button 
      {
        padding: 4px 2px;
        margin: 20px 0;
        width: 100%;
        border: none;
        border-radius: 12px;
        cursor: pointer;
      }      
    }

    @media screen and (max-width: 460px) {

      .modal-content {
        width: 100%;
      }
    }

    @media screen and (max-width: 300px) {

      input[type=text] {
        width: 100%;
        padding: 12px 20px;
        height: 2px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        height: 2px;

      }

    }
  </style>
</head>

<body>


  <form class="modal-content animate" method="post"  action="mreserconform.php">

    <div class="imgcontainer">
      <img src="../img/cust.gif" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <p> Customer details: </p>

      <label><b>First name</b></label>
      <input type="text" placeholder="Enter First Name" autocomplete="off" name="fn" required minlength="2">

      <label><b>Last name</b></label>
      <input type="text" placeholder="Enter Last Name" autocomplete="off"  name="ln" required minlength="3">

      <label><b>Contact Number</b></label>
      <input type="text" placeholder="Enter phone number" autocomplete="off" name="cno" required minlength="10" maxlength="12" pattern="[0-9]+">

      <label><b>Email:</b></label>
      <input type="text" placeholder="Enter Email-Id" autocomplete="off" name="emid" required minlength="10">

      <label><b>Address:</b></label>
      <input type="text" placeholder="Enter Full Address" autocomplete="off" name="adr" required minlength="5">

      <label><b> <?php echo $row['icard_type']; ?> No: </b></label>
      <input type="text" placeholder="Enter <?php echo $row['icard_type']; ?> No" name="cidt" required>

      <table>
        <tr>
          <th> Pakage Name </th>
          <th> Room No </th>
          <th> check in date </th>
          <th> check out date </th>
          <th> Total days </th>
          <th> Price </th>
          <th> Total </th>
        </tr>

        <tr align="center">
          <td> <?php echo $_SESSION['pkna']; ?> </td>
          <td> <?php echo $_SESSION['roomno']; ?> </td>
          <td> <?php echo $_SESSION['fdate']; ?> </td>
          <td> <?php echo $_SESSION['tdate']; ?> </td>
          <td> <?php echo $_SESSION['tdays']; ?> </td>
          <td> <?php echo $_SESSION['pkprice']; ?> </td>
          <td> <?php echo $_SESSION['pktotal']; ?> </td>
        </tr>
      </table>

      <button type="submit"> Confirm and Pay </button>
    </div>
  </form>
  </div>
</body>

</html>