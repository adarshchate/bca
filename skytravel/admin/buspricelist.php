<?php           //data received from bus.php
session_start();
$_SESSION['f']=$_POST["fr"];
$_SESSION['t']=$_POST["too"];
$_SESSION['d']=$_POST['dt'];
$_SESSION['q']=$_POST['qty'];

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

table,td,th{
border: 1px solid black;
}
table{
    width: 98%;
    border-collapse: collapse;
    font-size:14px;
    text-align: center;  
}
tr:nth-child(even)
{
    background-color:#FFE4C4;
}
tr:nth-child(odd)
{
    background-color:#DCDCDC;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius:10px;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius:0;
}

.container {
  padding: 16px;
 
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

@media (max-width:420px)
{
  table{
    width: 98%;
    border-collapse: collapse;
    font-size:10px;
    text-align: center;  
}
}

@media (max-width:250px)
{
  table{
    width: 50%;
    border-collapse: collapse;
    font-size:6px;
    text-align: center;  
}
button {

  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  font-size:8px;
  text-align: center;
  border-radius:0px;
  width: 50%;
  height:2%;
}
}
input[type=radio]{
  width: 5%;
  transform:scale(1.8);
  padding: 12px 20px;
  margin: 8px 12px;
}

</style>
</head>
<body>

<form class="modal-content animate" action="busbook.php" method="post">

<div class="imgcontainer">
<img src="ad/price.gif" alt="Avatar" class="avatar"> 
</div>

<div class="container"> 


<table>
<tr>
    <th colspan=4  bgcolor="#90EE90 ">Ticket Price List</th>
</tr>

<tr>
<th> City </th>
<th> Day Time </th>
<th> Night Time </th>
<th> Price </th>
</tr>

<tr>
<td> Solapur-To-Panvel / Panvel-To-Solapur </td>
<td> 09:00am-05:00pm / 09:00am-05:30pm </td>
<td> 06:00pm-02:00am / 06:00pm-01:00am </td>
<td> 850 </td>
</tr>

<tr>
<td> Solapur-To-Wakad / Wakad-To-Solapur </td>
<td> 09:00am-02:00pm / 12:00pm-05:30pm </td>
<td> 06:00pm-11:00pm / 9:00pm-01:00am </td>
<td>550 </td>
</tr>

<tr>
<td>Solapur-To-Hadapsar / Hadapsar-To-Solapur  </td>
<td> 09:00am-12:30pm / 01:30pm-05:30pm </td>
<td> 06:00pm-10:00pm / 10:00pm-01:00am </td>
<td>350 </td>
</tr>



<tr>
<td> Hadapsar-To-Wakad / Wakad-To-Hadapsar </td>
<td> 12:30pm-02:00pm / 12.00pm-01:30pm </td>
<td> 10:00pm-11:00pm / 09:00pm-10:00pm </td>
<td>200</td>
</tr>

<tr>
<td> Hadapsar-To-Panvel / Panvel-To-Hadapsar </td>
<td> 12:30pm-05:00pm / 09.00am-01:30pm </td>
<td> 10:00pm-02:00am / 06:00pm-10:00pm </td>
<td>500</td>
</tr>

<tr>
<td> Wakad-To-Panvel / Panvel-To-Wakad </td>
<td> 02:00pm-05:00pm / 9.00am-12:00pm </td>
<td> 11:00pm-02:00am / 06:00pm-09:00pm </td>
<td>300</td>
</tr>

<tr>
  <th colspan="4" bgcolor="white"> <h1> When Are You Going To Travel? </h1> <h3>  
  <input type='radio' name='d' value='d' required>Day
  <input type='radio' name='d' value='n'  required>Night <br> </h3>
  </th>  
</tr>

</table>

<button type="submit">NEXT</button>
</div>

</form>

</div> <!--//modal-content animate"-->

</body>
</html>

