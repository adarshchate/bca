<!-- this page is Messages for contact us -->
<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php include('topbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader { 
    background: url('ad/lod.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity:100%;
}

#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#ddd3e6;
  border-collapse: collapse;
  width: 99%;
  border: 2px solid black;
  font-size:18px;
}
#myTable th{
 background-color:#c39fe3;
 color:black;
}
#myTable th, #myTable td {
  text-align:center;
  width:fit-content;
  padding: 2px;
}
#myTable tr {
  border-bottom: 1px solid darkred;
  border: 1px solid blue;
}
@media screen and (max-width: 600px) {
  .myss {
    width: auto;
  }
#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#ddd3e6;
  border-collapse: collapse;
  width: 98%;
  border: 2px solid #cccc66;
  font-size:8px;
}
#myTable th, #myTable td {
  text-align:center;
  width:fit-content;
  padding: 1px;
}

}
@media screen and (max-width: 420px) {
  .myss {
    width: auto;
  } 
#myTable {

  width: 95%;
  height: auto;
  border: 1px solid #cccc66;
  font-size:8px;
}
#myTable th, #myTable td {
  text-align:center;
  width:fit-content;
  padding: 1px;
}
}
</style>
</head>

<body>


<div class="myss"> 
<h4 align="center ">Packages Bookings</h4>
<table id="myTable">
<tr>
<th>Sr.no</th>
<th>Pack.name</th>
<th>booking id</th>
<th>First name</th>
<th>Last Name</th>
<th>Contact </th>
<th>Submitted On </th>
<th>Travel On</th>
<th>Seat Qty</th>
<th>Pack.Amt</th>
<th>Total Bill</th>
</tr>


<?php 
  
  $con=makeconnection();
  $db=mysqli_select_db($con,"skytravel") or die("error in db");   //select database

  $sql="SELECT * FROM `travelpakages`;";   //show all data 

  $rs=mysqli_query($con,$sql); //query run
  
  while($row = mysqli_fetch_assoc($rs))
  {
      echo "<tr>";
      echo "<td>";
      echo $row['srno'];
      echo "</td>";
      
      echo "<td>";
      echo $row['Packagename'];
      echo "</td>";
      
      echo "<td>";
      echo $row['bookingid'];
      echo "</td>";
      
      echo "<td>";
      echo $row['fname'];
      echo "</td>";

      echo "<td>";
      echo $row['lname'];
      echo "</td>";

      echo "<td>";
      echo $row['contactno'];
      echo "</td>";

      echo "<td>";
      echo $row['submitdate'];
      echo "</td>";

      echo "<td>";
      echo $row['tdate'];
      echo "</td>";
      
      echo "<td>";
      echo $row['seatqty'];
      echo "</td>";
      
      echo "<td>";
      echo $row['pakageamt'];
      echo "</td>";
      
      echo "<td>";
      echo $row['totalbill'];
      echo "</td>";

      echo "</tr>";
  }
  
?> 
</table>
</div>
</body>
</html>
