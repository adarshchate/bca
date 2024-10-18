<!-- this page is Messages for contact us -->
<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 
<?php include_once('ad/load.php'); ?> <!--include a loader-->
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
.navbar {
  width: 100%;
  right: 0;
  left: 0;
  top: 0;
  position:relative;   
}
#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#edbec5;
  border-collapse: collapse;
  width: auto;
  border: 2px solid #cccc66;
  font-size:18px;
}
#myTable th{
 background-color:#f56278;
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
    width: 100%;
    margin-left: auto;
    margin-right: auto;
  }
#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#edbec5;
  border-collapse: collapse;
  width: 80%;
  border: 2px solid #cccc66;
  padding:0px;
  font-size:10px;
}
#myTable th, #myTable td {
  text-align:center;
  width:fit-content;
  padding: 1px;
}
}
@media screen and (max-width: 420px) {
  .myss {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
  }
#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#edbec5;
  border-collapse: collapse;
  width: auto;
  border: 2px solid #cccc66;
  padding:1px;
  font-size:auto;
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
<p align="center "> Panvel To Solapur Day </p>
<table id="myTable">
<tr>
<th>Sr.no</th>
<th>First name</th>
<th>Last Name</th>
<th>Contact </th>
<th>booking id</th>
<th>Submitted On </th>
<th>Travel From</th>
<th>Travel To</th>
<th>D/N</th>
<th>Travel On</th>
<th>Bus Time</th>
<th>Bus No</th>
<th>Pack.Amt</th>
<th>Seat Qty</th>
<th>Total Bill</th>
</tr>


<?php                
  $con=makeconnection();
  $db=mysqli_select_db($con,"skytravel") or die("error in db");   //select database

  $sql="SELECT * FROM `ptos_d`;";   //show all data 

  $rs=mysqli_query($con,$sql); //query run
  
  while($row = mysqli_fetch_assoc($rs))
  {
      echo "<tr>";
      echo "<td>";
      echo $row['srno'];
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
      echo $row['bookid'];
      echo "</td>";

      echo "<td>";
      echo $row['submitdate'];
      echo "</td>";

      echo "<td>";
      echo $row['tfrom'];
      echo "</td>";
      
      echo "<td>";
      echo $row['tto'];
      echo "</td>";
       
      echo "<td>";
      echo $row['dy_nt'];
      echo "</td>";
       
      echo "<td>";
      echo $row['travdate'];
      echo "</td>";
       
      echo "<td>";
      echo $row['bustime'];
      echo "</td>";
       
      echo "<td>";
      echo $row['busno'];
      echo "</td>";
       
      echo "<td>";
      echo $row['priceper'];
      echo "</td>";
      
      echo "<td>";
      echo $row['seatqty'];
      echo "</td>";
      
      echo "<td>";
      echo $row['totalfare'];
      echo "</td>";

      echo "</tr>";
  }
?> 
</table>
</div>
</body>
</html>
