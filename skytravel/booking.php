<?php include('top.php'); ?>  <!-- including navigation bar -->

<html>
<head> <title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<style>
.topnav {
  position: relative;
  left: 0; 
  right: 0;
  padding: 0px 10px;
  transition: 0.4s;
  width: 100%;
  top: 0;
  z-index: 10;
  overflow: hidden;
  background-color:#000000 ;
}
</style>

</head>
<body>  
   
<?php include('gif/busgl.php'); ?>  <!--Bookings gif loading first  -->
<?php  include('bus.php'); ?>  <!-- Bus booking small form-->

<?php include('gif/busg.php'); ?>  <!--Bus Runing background-->

<?php include('packages.php'); ?> <!--packages for travelling Forms -->   
</body>
