<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 

<?php           //data received from bus.php
session_start();
$_SESSION['dn']=$_POST['d']; // dn is day or night

$s='solapur';
$p='panvel';
$h='hadapsar';
$w='wakad';
 
if($_SESSION['dn']=='d')  //if dn is day 
{    
  if($s==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='850';   //set price
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='09:00am-05:00pm'; //set time
    $_SESSION['dbbase']='stop_d';     // set database name to data save
  }
  else
  if($p==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='850';
    $_SESSION['busn']='MH46QW7777';  
    $_SESSION['ti']='09:00am-05:30pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  }
  else
  if($s==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='350';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='09:00am-12:30pm'; //set time
    $_SESSION['dbbase']='stop_d';  
  }  
  else
  if($h==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='350';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='01:30pm-05:30pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  }
  else
  if($s==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='550';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='09:00am-02:00pm'; //set time
    $_SESSION['dbbase']='stop_d';  
  }
  else
  if($w==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='550';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='12:00pm-05:30pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  } 
  else                                //////////////////////////1st sept completed /////////////////
  if($h==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='200';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='12:30pm-02:00pm'; //set time
    $_SESSION['dbbase']='stop_d';  
  }
  else
  if($w==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='200';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='12.00pm-01:30pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  }
  else
  if($h==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='500';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='12:30pm-05:00pm'; //set time
    $_SESSION['dbbase']='stop_d';  
  }
  else
  if($p==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='500';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='09.00am-01:30pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  }
  else                  //////////////////////////2nd sept completed /////////////////
  if($w==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='300';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='02:00pm-05:00pm'; //set time
    $_SESSION['dbbase']='stop_d';  
  }
  else
  if($p==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='300';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='9.00am-12:00pm'; //set time
    $_SESSION['dbbase']='ptos_d';  
  }
  else              ///////////3nd sept completed ///////////
   {
  echo "yout not select data";
   }
}
else                 //if dn is night then else part 
{
  if($s==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='850';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='06:00pm-02:00am'; //set time
    $_SESSION['dbbase']='stop_n';  
  }
  else
  if($p==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='850';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='06:00pm-01:00am'; //set time
    $_SESSION['dbbase']='ptos_n';  
  }
  else
  if($s==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='350';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='06:00pm-10:00pm'; //set time
    $_SESSION['dbbase']='stop_n';  
  }  
  else
  if($h==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='350';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='10:00pm-01:00am'; //set time
    $_SESSION['dbbase']='ptos_n';  
  }
  else
  if($s==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='550';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='06:00pm-11:00pm'; //set time
    $_SESSION['dbbase']='stop_n';  
  }
  else
  if($w==$_SESSION['f'] && $s==$_SESSION['t'])
  {
    $_SESSION['price']='550';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='9:00pm-01:00am'; //set time
    $_SESSION['dbbase']='ptos_n';  
  } 
  else             //////////////////////////1st sept completed /////////////////
  if($h==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='200';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='10:00pm-11:00pm'; //set time
    $_SESSION['dbbase']='stop_n';  
  }
  else
  if($w==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='200';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='09:00pm-10:00pm'; //set time
    $_SESSION['dbbase']='ptos_n';  
  }
  else
  if($h==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='500';
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='10:00pm-02:00am'; //set time
    $_SESSION['dbbase']='stop_n';  
  }
  else
  if($p==$_SESSION['f'] && $h==$_SESSION['t'])
  {
    $_SESSION['price']='500';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='06:00pm-10:00pm'; //set time
    $_SESSION['dbbase']='ptos_n';  
  }
  else                //////////////////////////2nd sept completed /////////////////
  if($w==$_SESSION['f'] && $p==$_SESSION['t'])
  {
    $_SESSION['price']='300'; 
    $_SESSION['busn']='MH46QW7777';
    $_SESSION['ti']='11:00pm-02:00am'; //set time
    $_SESSION['dbbase']='stop_n';  
  }
  else
  if($p==$_SESSION['f'] && $w==$_SESSION['t'])
  {
    $_SESSION['price']='300';
    $_SESSION['busn']='MH13AY5555';  //SET BUS NUMBER
    $_SESSION['ti']='06:00pm-09:00pm'; //set time
    $_SESSION['dbbase']='ptos_n';  
  }
  else                   //////////////////////////3nd sept completed /////////////////
   {
  echo "yout not select data";
   }
}
/*
echo "<br>from ".$_SESSION['f'];
echo "<br> to ".$_SESSION['t']; 
echo "<br> date ".$_SESSION['d'];
echo "<br> qty ".$_SESSION['q'];
echo "<br> day/night ".$_SESSION['dn'];
echo "<br> price ".$_SESSION['price']; 
echo "<br> bus no. ".$_SESSION['busn']; 
echo "<br> bus timing ".$_SESSION['ti']; 
echo "<br> total cost: ".$_SESSION['total']; 
*/
$_SESSION['total']=$_SESSION['q']*$_SESSION['price'];  // total fare calculation

$dbbus=$_SESSION['dbbase'];

$trdt=$_SESSION['d'];


$con=makeconnection();  //db  callinng throw function include file db
$db=mysqli_select_db($con,"skytravel") or die("error in db");   //select database

$sql="SELECT seatqty FROM $dbbus where travdate='$trdt';";   // passing all data to database 
  
  $rs=mysqli_query($con,$sql);

  $cnt=mysqli_num_rows($rs);

  while($row=mysqli_fetch_assoc($rs))
  {  
    $sum=0;
    $sum=$sum+$row['seatqty'];
  }

  if(isset($sum))
  { 
    $a=30-$sum;
    if($sum<=30)
    {
    echo "$a seats is available..";
    }
     else 
    {
     die( "this date ".$dt." booking is full try another date..availabes only seats".$a);
    }
  }
  else{
    echo "30 seats is available..";
  }

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
  padding: 16px;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 95%;
  border: 1px solid #ddd;
  font-size: 15px;
}
th, td {
  text-align: left;
  padding: 8px;
}
th{background-color:palegoldenrod}
tr{background-color:teal}

@media only screen and (max-width: 610px)
{
  table {
  border-collapse: collapse;
  width: 90%;
  height: auto;
  border: 1px solid #ddd;
  font-size: 12px;
}
th, td {
  text-align: left;
  padding: 1px;
}
}
@media only screen and (max-width: 420px)
{
  table {
  border-collapse: collapse;
  width: 50%;
  height:fit-content;
  border: 1px solid #ddd;
  font-size:2.5vw;
}
th,td {
  text-align: left;
  padding: 1px;
}
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

.animate {
  animation: animatezoom 0.6s
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}

</style>
</head>
<body>
<form class="modal-content animate" method="post"  action="busbook1.php">

<div class="imgcontainer">
<img src="ad/bus.gif" alt="Avatar" class="avatar"> 
</div>

<div class="a1class">                <!--   checkout table -->
<h1 align="center"> checkout </h1> <hr/>

<table>  
<tr> 
    <th> From </th>
    <th> To </th>
    <th> Date</th>
    <th> Day/Night </th>
    <th> Bus Time </th> 
    <th> Price Per. </th> 
    <th> Qty/Seats </th> 
    <th> Total </th> 
</tr>

<tr align="center">
<tr> 
    <td> <?php echo $_SESSION['f']; ?> </td>
    <td> <?php echo $_SESSION['t']; ?> </td>
    <td> <?php echo $_SESSION['d']; ?> </td>
    <td> <?php echo $_SESSION['dn']; ?> </td>
    <td> <?php echo $_SESSION['ti']; ?> </td> 
    <td> <?php echo $_SESSION['price']; ?> </td> 
    <td> <?php echo $_SESSION['q']; ?> </td> 
    <td> <?php echo $_SESSION['total'];  ?> </td> 
</tr>

</table>
</div>

<div class="container">               <!-- getting details --> 
      <label for="uname"><b>First name</b></label>
      <input type="text" placeholder="First Name" name="fname" required minlength="2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">

      <label for="uname"><b>Last name</b></label>
      <input type="text" placeholder="Last Name" name="lname" required minlength="3" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
      
      <label for="uname"><b>Contact Number</b></label>
      <input type="text" placeholder="Phone Number" name="conno" required minlength="10" maxlength="12" pattern="[0-9]+">

      <button type="submit">Submit</button>
</div>
</form>

</div> <!--//modal-content animate"-->  
</body>
</html>

