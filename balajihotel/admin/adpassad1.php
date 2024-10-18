<?php include('nav.php'); ?>
<?php
include('dbconnect.php');

$una = $_POST['aun']; 
$upa = $_POST['aup']; 

if(isset($_SESSION['admin1']))
{

    $con = makeconnection();
    //$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database
    
    $sql = "INSERT INTO `log` (`lid`, `usname`, `pass`) VALUES (NULL, '$una', '$upa')";
    $rs = mysqli_query($con, $sql);
    
if($rs==1)
{
    echo "Username And Password is added.. <br>";
    echo "Username: ".$una."<br>";
    echo "Password: ".$upa."<br>";
    unset($_SESSION['admin1']);
}
}
else
{
echo "<br><br>";
?>
<style>
        .button1 {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            font-size: 12px;
            width: 40%;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            cursor: pointer;
        }

</style>

<button class="button1" onclick="javascript:window.open('adpass.php','_self')"> Go Back </button>


<?php

}

exit;


?>