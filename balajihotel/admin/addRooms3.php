<?php
include('dbconnect.php');
session_start();

$r5=$_SESSION['rrid']; // room id
$r6=$_SESSION['rrno']; // room number 

$rnid = $_POST['room']; // room type id

if(isset($_SESSION['rrid']))
{
$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$sql = "INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) 
VALUES ('$r5', '$r6', '$rnid', '0', '0', '0', '0')";

$rs = mysqli_query($con, $sql);
if($rs==1)
{
    echo "room  is added.. <br>";
    echo "room  id: ".$r5."<br>";
    echo "room no: ".$r6."<br>";

    $query  = "SELECT roomty FROM room_type WHERE rty_id='$rnid'"; //SELECTED ROOM_ID to get  ROOM_TYPE and PRICE
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    $rmty = $row["roomty"];
    echo "room Type: ".$rmty."<br>";

    unset($_SESSION['rrid']);
    unset($_SESSION['rrno']);
}
}
else
header("location:http://localhost/balajihotel/admin/room.php");
