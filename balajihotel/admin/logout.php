<?php
session_start();
unset($_SESSION['adid']);
unset($_SESSION['adusid']);
header('Location:http://localhost/balajihotel/admin/admin.php');
?>
