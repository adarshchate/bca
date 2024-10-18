<?php include('nav.php'); ?>
<!-- including navigation bar -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    html,
    body

    /* for avoding white spaces on right side */
      {
      width: 100%;
      height: 100%;
      margin: 0px;
      padding: 0px;
      overflow-x: hidden;
    }

    .service1 {
      padding-top: 70px;
      width: 100%;
      right: 0px;
      left: 0px;
      align-items: center;
      background-color: #8c1531;
    }

    .ig1 {
      width: 40%;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 1%;

    }

    .service2 {
      background-color: #8c1531;
      color: white;
      text-align: center;
      color: wheat;
    }

    .preclass {
      background-color: #8c1531;
      color: wheat;
    }

    hr {
      width: 50%;
    }


    img {
      vertical-align: middle;
      width: 100%;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .containe19 {
      position: sticky;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
      cursor: pointer;
    }


    /* Container for image text */
    .caption-container {
      text-align: center;
      background-color: #222;
      padding: 2px 16px;
      color: white;
    }


    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Six columns side by side */
    .column {
      float: left;
      width: 16.5%;
      margin-top: 0px;
      margin-bottom: -8px;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
      opacity: 0.6;
    }

    .active,
    .demo:hover {
      opacity: 1;
    }

    @media screen and (max-width:415px) {

      .ig1 {
        width: 100%;
      }

      .service1 {
        padding-top: 50px;
        width: 100%;
      }

      .column {
        margin-top: 0px;
        margin-bottom: -2px;
      }
    }
  </style>
</head>

<body>
  <div class="service1">
    <img class="ig1" src="img/HotelSer.gif">





    <!----------------------------------------------------------------------------------------------->
    <br><br>
    <div class="service2">
      <p>
      <h3 align="center"> Services </h3> <br>
      <hr>

      <h3 align="center"> Hotel Facilities </h3>
      <hr>
      • TV color LED <br>
      • Wi-Fi <br>
      • Semi open & outdoor restaurant<br>
      • Children up to 3 years stay (in cot)<br>
      • Car parking<br>
      • Swimming pool/ Jacuzzi<br>
      • Public computer<br>
      • Disable rooms & Interconnecting rooms<br>
      • 24 Hour security<br>
      • Outside catering service<br>
      • 100 Seating capacity restaurant<br>
      • 150 Capacity outdoor terrace<br>
      • 45 Seating conference room<br>
      • 35 Seating private air-conditioning dining room<br>
      • Water purification system<br>
      • Sunset boat trip<br>
      <br><br>

      <hr>
      <h3 align="center"> Guest Service </h3>
      <hr>
      • 24-Hour room service<br>
      • Free wireless internet access<br>
      • Complimentary use of hotel bicycle<br>
      • Laundry service<br>
      • Tour & excursions<br>
      • 24 Hour concierge<br>
      • Meeting facilities<br>
      • E-Bike & horse cart rental<br>
      • Airport transfers<br>
      • Babysitting on request<br>
      • 24-Hour doctor on call<br>


      </p>
      <br><br>


      <h3 style="text-align:center"> Some Images </h>

        <div class="container19">

          <div class="mySlides">
            <img src="img/tvwifi.jpg">
          </div>

          <div class="mySlides">
            <img src="img/breakfa.jpg">
          </div>

          <div class="mySlides">
            <img src="img/lunch.jpg">
          </div>

          <div class="mySlides">
            <img src="img/snaks.jpg">
          </div>

          <div class="mySlides">
            <img src="img/coffe.jpg">
          </div>

          <div class="mySlides">
            <img src="img/par.jpg">
          </div>


          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">

            <div class="column">
              <img class="demo cursor" src="img/tvwifi.jpg" onclick="currentSlide(1)" alt="Tv Wifi ">
            </div>

            <div class="column">
              <img class="demo cursor" src="img/breakfa.jpg" onclick="currentSlide(2)" alt="Breakfast">
            </div>
            <div class="column">
              <img class="demo cursor" src="img/lunch.jpg" onclick="currentSlide(3)" alt="Lunch">
            </div>
            <div class="column">
              <img class="demo cursor" src="img/snaks.jpg" onclick="currentSlide(4)" alt="fast foods">
            </div>
            <div class="column">
              <img class="demo cursor" src="img/coffe.jpg" onclick="currentSlide(5)" alt="Coffe">
            </div>
            <div class="column">
              <img class="demo cursor" src="img/par.jpg" onclick="currentSlide(6)" alt="Parking area">
            </div>
          </div>
        </div>

        <script>
          var slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
              slideIndex = 1
            }
            if (n < 1) {
              slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
          }
        </script>
    </div>
  </div>
</body>

</html>
<?php include('footer.php'); ?>
<!-- including navigation bar -->