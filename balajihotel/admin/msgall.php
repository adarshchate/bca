<!-- this page is Messages for contact us -->
<?php include('nav.php'); ?>
<?php include('dbconnect.php'); //database connection...dbconnect.php  ?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Messages</title>

<style>

html,body  /* for avoding white spaces on right side */
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}

.loader { 
    background: url('ad/lod.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity:100%;
}

#myTable {
  margin-left: auto;
  margin-right: auto;
  background-color:#d5e3eb;
  border-collapse: collapse;
  width: auto;
  border: 3px solid #cccc66;
  font-size:15px;
}
#myTable th{
 background-color:#97cce8;
 color:black;
}
#myTable th, #myTable td {
  text-align:center;
  width:fit-content;
  padding: auto;
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
  background-color:papayawhip;
  border-collapse: collapse;
  width: 98%;
  border: 3px solid #cccc66;
  font-size:8px;
}
}
</style>
</head>

<body>


<div class="myss"> 
<h4 align="center ">Customers Messages</h4>
<table id="myTable">
<tr>
<th style="width:1%;">Sr.no</th>
<th style="width:10%;">First name</th>
<th style="width:10%;">Last Name</th>
<th style="width:10%;">Contact </th>
<th style="width:13%;">Submitted On </th>
<th style="width:40%;">Messages</th>
</tr>


<?php                
  
  $con=makeconnection();
  $db=mysqli_select_db($con,"balajihotel") or die("error in db");   //select database

  $sql="SELECT * FROM `mesg`";   //show all data 
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
      echo $row['contactus'];
      echo "</td>";

      echo "<td>";
      echo $row['subdate'];
      echo "</td>";

      echo "<td>";
      echo $row['messub'];
      echo "</td>";

      echo "</tr>";
    
  }
?> 
</table>
</div>
</body>
</html>
