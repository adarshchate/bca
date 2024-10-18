<?php include('nav.php'); ?>

<?php
include('dbconnect.php');

$rna = $_POST['edna']; //name
$rpa = $_POST['edsa']; //salary

if(isset($_SESSION['eidd']))
{
    $rri=$_SESSION['eidd'];  // did

    $con = makeconnection();
    $db = mysqli_select_db($con, "balajihotel") or die("error in db");   //select database
    
    $sql = "INSERT INTO `empdgon` (`edid`, `edname`, `esalary`, `edstatus`) VALUES ('$rri', '$rna', '$rpa', '0')";
    $rs = mysqli_query($con, $sql);
    
if($rs==1)
{
    echo "Designation is added.. <br>";
    echo "Designation id: ".$rri."<br>";
    echo "Designation Name: ".$rna."<br>";
    echo "Designation Salary: ".$rpa."<br>";
    unset($_SESSION['eidd']);
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

<button class="button1" onclick="javascript:window.open('emp.php','_self')"> Go Back </button>


<?php

}

exit;


?>