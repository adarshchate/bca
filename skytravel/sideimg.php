
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: text-bottom;}

/* Slideshow container */
.slideshow-container {
  max-width: 100vw;

  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  position: sticky;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.itsme{
  background:linear-gradient(125deg,#842DCE,#800517);
}

</style>

<div class="itsme">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="image/taj.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="image/ker.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="image/lus.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center"> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
