<?php
include('dbconnect.php');
session_start();

$rna = $_POST['roty'];
$rpa = $_POST['rop'];

$rri=$_SESSION['rid'];
if(isset($_SESSION['rid']))
{
$con = makeconnection();
$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database

$sql = "INSERT INTO `room_type` (`rty_id`, `roomty`, `price`) VALUES ('$rri', '$rna ', '$rpa')";
$rs = mysqli_query($con, $sql);

if($rs==1)
{
    echo "room type is added.. <br>";
    echo "room type id: ".$rri."<br>";
    echo "room Name: ".$rna."<br>";
    echo "room price: ".$rpa."<br>";
    unset($_SESSION['rid']);
}
}
else
header("location:http://localhost/balajihotel/admin/room.php");


?>