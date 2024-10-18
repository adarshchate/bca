
<!DOCTYPE html> <!-- this is page for admin login screen.post to.logcheck.php --> 
<html>
<head>
<link rel="icon" href="../img/manager.png" type="image/gif" sizes="50x50">  <!-- this is page for web icon -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  
}
.hom {                         /*for home button*/         
  background-color: #f59e42;
  border: none;
  color: white;
  padding: 8px 25px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 1%;
}
.hom1 {                         /*for home button*/         
  background-color: #32a84e;
  border: none;
  color: white;
  padding: 8px 25px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 1%;
}
.hom3 {                         /*for home button*/         
  background-color:#31828f;
  border: none;
  color: white;
  padding: 8px 25px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 1%;
}

/* Darker background on mouse-over */
.hom:hover {
  background-color: RoyalBlue;
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("../img/ad.jpg");
  min-height: 800px;
  width: 100%;  
  margin-left: -8px;
  margin-top: -8px;
  margin-right: 0px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin:4px;
  max-width: 350px;
  padding: 16px;
  padding-top:20px;
  padding-bottom: 30px;
  background-color:#c5bfff;
  border-radius: 10px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding:15px;
  margin: 5px 0 22px 0;
  border: none;
  border-radius: 2px;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:#fbfaff;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>



</head>
<body>   

<div class="bg-img">   

<button class="hom" onclick="javascript:window.open('../index.php','_blank')"> Home </button> <br> <br>
<button class="hom1" onclick="javascript:window.open('getbill.php','_blank')"> Get Invoice </button> <br> <br>
<button class="hom3" onclick="javascript:window.open('cancelform.php','_blank')"> Cancel Booking Form </button> <br> <br>



  <form method="POST" action="logcheck.php" class="container">

    <h1>Admin Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="user" autocomplete="off" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>

</body>
</html>


