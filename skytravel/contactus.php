<?php include('top.php'); ?>  <!-- including navigation bar -->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}
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

.my-float{
  position: fixed;
	width: 60px;
	height:60px;
	bottom:20px;
	right:10px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:60px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 5;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 15px 20px;
  border: none;
  border-radius:20px;
  cursor: pointer;
  
  
}
 
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .my-float{
  position: fixed;
	width: 60px;
	height:60px;
	bottom:20px;
	right:10px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:60px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}
}

</style>

<script>
var message = "function disabled";
function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
document.onmousedown = rtclickcheck;
 

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
            return false;
        }
    }
</script>



</head>
<body>
<br> 
<h3 align="center">Plan Your Trip <br>
Our travel experts can help you book now </h3>
<h4 align="center">Enter Your Message </h4>

<div class="container">

  <form method="POST" action="collect.php">

    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="ft" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lt" placeholder="Your last name.."  required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Contact </label>
      </div>
      <div class="col-75">
      <input type="text"  name="ct" placeholder="Contact No / Email.."  required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
      <textarea id="subject" name="sb" placeholder="Write something.." style="height:150px" required> </textarea>
      </div>
    </div>
    <div class="row"> &nbsp;  &nbsp;  &nbsp; 
     <input type="submit"  value="Submit">
     
    <a style="text-decoration:none" href="https://wa.me/+917097057777" class="fa fa-whatsapp my-float"> </a>
    
    </div>
  </form>
</div>

</body>
</html>


