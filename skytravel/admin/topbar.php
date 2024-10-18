<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.active {
  background-color:red;
  color: white;
}
.topnav .icon {
  display: none;
}
.dropdown {
  float: left;
  overflow: hidden; 
}
.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}
.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 420px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative; }
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    font-size: 8px;
    
  }
  .topnav.responsive .dropdown {float: none; }
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
    font-size: 8px;
  }
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="../index.php" class="active">Logout </a>
  <a href="packagesb.php">Pakages Bookings</a>
  <div class="dropdown">
    <button class="dropbtn">Up-Down Buses 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="stopday.php">Solapur-Panvel D</a>
      <a href="ptosnight.php">Panvel-Solpaur N</a>
      <a href="ptosday.php">Panvel-Solpaur D</a>
      <a href="stopnight.php">Solapur-Panvel N</a>
    </div>
  </div> 
  <a href="msgcon.php">Messages</a>
 <!-- <a href="#about">Print Bill</a> -->
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
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

</body>
</html>
