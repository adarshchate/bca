 <!-- this page is checking admin index form longin .... index.php-->
 
<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php
session_start();
$n= $_POST["user"]; 
$p= $_POST["psw"];     

if (empty($n)) {      // if  the session is empty then return
   echo "<script> alert(' you not accesss direct..!'); </script>"; 
   header(" location:admin.php");
 }


$con=makeconnection(); //calling throw including the dbconnect.php file 
$db=mysqli_select_db($con,"balajihotel") or die("error in db");               

$sql="SELECT lid,usname FROM `log` WHERE usname='$n' AND pass='$p'";   //username and password chacking..
$rs=mysqli_query($con,$sql); 
$a=mysqli_fetch_assoc($rs);
//echo $a['lid'];
//echo $a['usname'];
$_SESSION['adid']=$a['lid'];
$_SESSION['adusid']=$a['usname'];

$count=mysqli_num_rows($rs);

 if($count>0) 
 {    
    echo "<script> alert(' Password..!'); </script>";  
    header("location:index.php");
 } 
 else 
  { 
  echo "<script> alert('Invalid User Name or Password..!'); </script>"; 
}
include('admin.php');


?>