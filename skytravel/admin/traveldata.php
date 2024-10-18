<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php
session_start();

$pkname=$_POST['pk'];                 // pakage name
$_SESSION['first']=$_POST['fn'];    // first  name
$_SESSION['last']=$_POST['ln'];  //last name
$_SESSION['con']=$_POST['cno'];   // conatact number
$_SESSION['bkdate']=$_POST['dt'];  // booking date 
$dt=$_POST['dt']; //
$_SESSION['qqt']=$_POST['qty'];   // qty of seats
$_SESSION['pname']=$pkname;      // pakage name     


if($pkname=='shimla')
{
     $_SESSION['pkprice']='28000';
     $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
     $_SESSION['pkna']='Shimla,Kasol,Manali';
     $_SESSION['dura']='3N-4D';
     $_SESSION['dbbase']='travelpakages'; 
  
}
else
if($pkname=='hawa')
{
    $_SESSION['pkprice']='28000';
    $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
    $_SESSION['pkna']='Hawa Mahal,Amber palace,City palace';
    $_SESSION['dura']='3N-4D';
    $_SESSION['dbbase']='travelpakages'; 
}
else
if($pkname=='taj')
{
    $_SESSION['pkprice']='20000';
    $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
    $_SESSION['pkna']='Taj Mahal,agra fort';
    $_SESSION['dura']='2N-3D';
    $_SESSION['dbbase']='travelpakages'; 
}
else
if($pkname=='patwa')
{
    $_SESSION['pkprice']='22000';
    $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
    $_SESSION['pkna']='Patwa Haveli,Jaisalmer fort,Vyas Chhatri';
    $_SESSION['dura']='3N-4D';
    $_SESSION['dbbase']='travelpakages'; 
}
else
if($pkname=='nepal')
{
    $_SESSION['pkprice']='50000';
    $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
    $_SESSION['pkna']='Kathmandu Pokhara,Nagarkot,Bhaktapur';
    $_SESSION['dura']='7N-8D';
    $_SESSION['dbbase']='travelpakages'; 
}
else
if($pkname=='mahab')
{
    $_SESSION['pkprice']='16000';
    $_SESSION['pktotal']=$_SESSION['qqt']*$_SESSION['pkprice'];
    $_SESSION['pkna']='Mahabaleshwar,Elphinstone Point,Pratapgad';
    $_SESSION['dura']='3n-4D';
    $_SESSION['dbbase']='travelpakages'; 
}
else
{
    echo "select the correct pakage";
}


$con=makeconnection();  //db  callinng throw function include file db
$db=mysqli_select_db($con,"skytravel") or die("error in db");   //select database

$sql="SELECT seatqty FROM travelpakages WHERE Packagename='$pkname' and tdate='$dt';";   // passing all data to database 
  
  $rs=mysqli_query($con,$sql);

  $cnt=mysqli_num_rows($rs);

  while($row = mysqli_fetch_assoc($rs))
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
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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



table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 15px;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color:palegoldenrod}
tr:nth-child(odd){background-color:teal}


@media only screen and (max-width: 610px)
{
  table {
  border-collapse: collapse;
  width: 100%;
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
  width: fit-content;
  height:fit-content;
  border: 1px solid #ddd;
  font-size: 8px;
}
th, td {
  text-align: left;
  padding: 1px;
}
}
</style>



</head>
<body>  
<form class="modal-content animate" method="post" action="traveldata2.php">   

<div class="container"> 
<h1 align="center"> checkout </h1> <hr/>

<table>  
<tr> 
    <th> Pakage Name </th>
    <th> Price </th>
    <th> Duration </th>
    <th> Booking Seats/Qty </th>
    <th> Total </th> 
</tr>

<tr align="center">
<td> <?php echo  $_SESSION['pkna']; ?> </td>
<td> <?php echo $_SESSION['pkprice']; ?> </td>
<td> <?php echo $_SESSION['dura']; ?> </td>
<td> <?php echo $_SESSION['qqt'] ?> </td>
<td> <?php echo  $_SESSION['pktotal'];?> </td>
</tr> 

</table>
<button type="submit">Submit</button>

</div>
</form>
</body>
</html>
