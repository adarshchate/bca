<?php include('nav.php'); ?>
<?php
include('dbconnect.php');


if(isset($_SESSION['admin2']))
{

    $con = makeconnection();
    $dli = $_POST['adlu'];
    //$db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database
    
    $sql = "DELETE FROM `log` WHERE `log`.`lid` = $dli";
    $rs = mysqli_query($con, $sql);
    
if($rs==1)
{
    echo "Username And Password is Deleted.. <br>";
    unset($_SESSION['admin2']);
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