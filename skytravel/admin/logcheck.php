 <!-- this page is checking admin index form longin .... index.php-->
 
<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php
session_start();
$_SESSION['name']= $_POST["user"]; 
$_SESSION['pass'] = $_POST["psw"];     

$n=$_SESSION['name'];
$p=$_SESSION['pass'];

session_destroy();
$con=makeconnection(); //calling throw including the dbconnect.php file 
$db=mysqli_select_db($con,"skytravel") or die("error in db");               

$sql="SELECT * FROM `log` WHERE usname='$n' AND pass='$p'";   //username and password chacking..

$rs=mysqli_query($con,$sql); 

$count=mysqli_num_rows($rs);

  
 if($count>0) 
 {
    session_start();
    $_SESSION['$avc']='log';
    header("location:adhome.php");      //go for admin screen
 } 
 else 
  { 
  echo "<script> alert('Invalid User Name or Password..!'); </script>"; 
  }
  include('index.php'); // re-login admin 
   
?>