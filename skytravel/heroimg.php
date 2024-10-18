<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("image/backg.jpg");
  height: 70%;
  top: 0;
  bottom: 0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
.sky{ 
  background:linear-gradient(30deg,#20B2AA,#800080 );
  margin-top:0;
  margin-bottom: 0;
  position: relative;
  text-align: center;
  height: 58%;
}

@media screen and (max-width:480px) {
.hero-image {
  top: 0%;
  height:40%;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.sky{ 
  position: relative;
  text-align: center;
  height: 50%;
}

} 

</style>
</head>
<body>

<div class="hero-image">  <!-- hero img form     -->
  <div class="hero-text">
    <h1 style="font-size:5vw">MAKE YOUR RESERVATION</h1>
    <p> Pack your bags. We’re going on vacation!</p>
  </div>
</div>

<div class="sky"> 
    <img src="image/15.png" width="150px"> </a>
    <p style="font:45px Forte"> SkyTravel </p>
    <hr> <hr>
</div>


<p><!-- enter page contant --></p>

</body>
</html>
