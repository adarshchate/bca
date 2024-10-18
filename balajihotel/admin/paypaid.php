<?php
include('dbconnect.php');
$bid = $_POST['trcode']; // transactions id 

session_start();
if(!isset($_SESSION['bcanid']))
{
    header("Location:http://localhost/balajihotel/admin/reservation.php");
}
$bcid=$_SESSION['bcanid']; // cancel booking id

$tot=$_SESSION['tpk']; // total package price
$rda=$_SESSION['ramt']; // total reduce 
$rdat=$_SESSION['reamt']; // total reduce total

$cTime = date('d-m-Y h:i A');  // time for billing receipt 

$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

if(isset($_SESSION['bcanid']))
{
$sql = "INSERT INTO `cancelpayment` (`cpid`, `ccid`, `transactionid`, `pamount`, `reduceper`, `paidamount`, `paiddate`, `profit_amt`)
VALUES (NULL, '$bcid', '$bid', '$tot', '25%', '$rdat', '$cTime', '$rda')";

$result = mysqli_query($con, $sql);


if($result==1)
{
    echo "Done Inserted";
    $sql = "UPDATE `cancelbookings` SET `cancelpaystatus` = '1' WHERE `cancelbookings`.`ccid` = $bcid";
    $result = mysqli_query($con, $sql);
}

unset($_SESSION['bcanid']);
unset($_SESSION['tpk']);
unset($_SESSION['ramt']);
unset($_SESSION['reamt']);
}


?>