
<?php include('admin/dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php
$na =$_POST['ft'];
$ln =$_POST['lt'];
$ct = $_POST['ct'];
$mes = $_POST['sb'];

date_default_timezone_set('Asia/Kolkata'); //getting current time
$cTime = date( 'd-m-Y h:i A', time());  // time for billing receipt 

$con=makeconnection();
$db=mysqli_select_db($con,"skytravel") or die("error in db");

$sql="INSERT INTO `mesg` VALUES (NULL, '$na', '$ln', '$ct', '$cTime', '$mes');";
mysqli_query($con,$sql) or die("Sql Connection Error..");

echo "Your Message Has been Sent Successfully..";



?>


