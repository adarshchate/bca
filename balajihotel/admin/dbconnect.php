
<?php
function makeconnection()
{
	$con=mysqli_connect("localhost","root","","balajihotel");
	if(mysqli_connect_errno())
	{
		echo "connection error";
	}
	return $con;
}
$con=mysqli_connect("localhost","root","","balajihotel");
?>
