
<?php
function makeconnection()
{
	$con=mysqli_connect("localhost","root","","skytravel");
	if(mysqli_connect_errno())
	{
		echo "connection error";
	}
	return $con;
}
$con=mysqli_connect("localhost","root","","skytravel");
?>
