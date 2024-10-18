<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  position:fixed;
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
.topnav a {
  float: left;
  display: block;
  color: #FFE4C4;
  text-align: center;
  padding: 12px 25px;
  text-decoration: none;
  font-size: 20px;
  line-height: 26px;
}
.topnav a:hover {
  background-color: #FFDEAD ;
  color: black;
}
.igm a:hover {
  background-color:0;
  color: red;
}

.topnav a.active {
  background-color: #008000;
  color: white;
}
.topnav a.logo {
  font-size: 25px;
  font-weight: bold;
}
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav.responsive {position:fixed;}
  .topnav a.icon {
    float:right;
    position: relative;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position:fixed;}
  .topnav a.icon {
    position:relative;
    display: block;

  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
  </head>
<div class="topnav" id="myTopnav">
  <div class="igm"> 
  <a> <img src="image/15.png" width="30px"> SkyTravel </a> </div>

</a>
<a href="index.php" onclick="javascript:window.open('admin.php','_self')" >   Home </a> 
<a href="gallary.php"  onclick="javascript:window.open('gallary.php','_self')" > Gallary </a>
<a href="booking.php"> Bookings </a>
<a href="contactus.php">Contact us</a>
<a href="aboutus.php"> About us </a>
<a href="admin/index.php"> Admin  </a>

<!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<img src="image/ti.png" width="39px"> -->
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>

</div>

<script> 
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
