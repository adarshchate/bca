<?php include('top.php'); ?>  <!-- including navigation bar -->

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

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 100%; 
  width: 100%;
  
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (max-width:480px)
{
.you{ 
  width: 100%;
  height:fit-content;
 }
}

/* Images used */
.img1 { background-image: url("image/ker.jpg"); }
.img2 { background-image: url("image/ky.jpg"); }
.img3 { background-image: url("image/kl.jpg"); }
.img4 { background-image: url("image/taj.jpg"); }
.img5 { background-image: url("image/lus.jpg"); }
.img6 { background-image: url("image/ke.jpg"); }
.img7 { background-image: url("image/hawa.jpg"); }
.img9 { background-image: url("image/kullumanali.jpg"); }
.img8 { background-image: url("image/backg.jpg"); }

/* Position text in the middle of the page/image */
.sky{ 
  background:  linear-gradient(10deg,#20B2AA,#800080 );
  top: 0%;
  padding: 50px;
  position: relative;
  text-align: center;
  height: 80%;
}
</style>



</head>

<body>
<div class="sky"> 
    <img src="image/15.png" width="150px"> </a>
    <p style="font:45px Forte"> SkyTravel </p>
</div>
<div class="you">
<iframe width="100%" height="90%" src="https://www.youtube.com/embed/lOFtbqE6z50" 
  allow="accelerometer; autoplay; 
  clipboard-write; encrypted-media; gyroscope; picture-in-picture"
   allowfullscreen>
</iframe>
</div>


<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>
<div class="bg-image img7"></div>
<div class="bg-image img9"></div>
<div class="bg-image img8"></div>
 

</body>
</html>
