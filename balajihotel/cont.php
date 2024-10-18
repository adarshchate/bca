<?php include('nav.php'); ?>
<!-- including navigation bar -->

<html>

<head>
  <link rel="icon" href="img/ic1.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- for whatsapp-->

  <style>
    body {
      color: black;
      background: rgb(34, 193, 100);
      background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(31, 23, 66) 100%);
    }

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

    .about-section {
      padding: 20px;
      text-align: center;
      margin-left: 5px;
      margin-right: 5px;
      color: #ffffff;
    }

    .soc {
      text-align: center;
      padding-top: 80px;
    }

    #i1 {
      color: #def0ff;
      text-decoration: none;
      font-size: 16px;
    }

    h4 {
      text-align: center;
      text-decoration: none;
      color: wheat;
    }

    .fas {
      padding-left: 20px;
      text-align: center;
      text-decoration: none;
      color: black;
      padding-top: 10px;
      margin-bottom: 10px;

    }

    .p2 {
      text-align: left;
      margin-left: 10%;
    }

    .sec1 {
      text-align: justify;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 5px;
      color: black;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
    }

    label {
      padding: 10px 10px 10px 5;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #e34b4b;
      color: white;
      padding: 5px;
      width: 50%;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: auto;
      margin-right: auto;
      display: block;

    }

    input[type=submit]:hover {
      background-color: #3753d1;
    }

    .container007 {
      border-radius: 8px;
      background-color: rgba(169, 224, 166, .5);
      background-size: 100% 100%;
      color: black;
      padding: 20px;
      margin-left: 10px;
      margin-right: 10px;
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

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }

      .container007 {
        margin-left: 2px;
        margin-right: 2px;
      }

      .soc {
        text-align: center;
        padding-top: 80px;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }

      #i1 {
        color: #def0ff;
        text-decoration: none;
        font-size: 14px;
      }

      .about-section {
        padding: 10px;
        text-align: center;
        font-size: 12px;
        margin-left: 1px;
        margin-right: 1px;
      }

      .p2 {
        text-align: left;
        margin-left: 2px;
        margin-right: 2px;
      }

      .mymp {
        margin-left: 0px;
        margin-right: 0px;
        width: 100%;
      }

      h3 {
        font-size: 14px;
      }
    }

    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 60px;
      right: 20px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;
    }
  </style>

</head>

<body>


  <p class="soc">
  <h4> <img src="img/balaji1.png" width="75px" height="80px"><br> Contact us<br>
    <a id="i1" href="tel:7097057777"> <img src="img/call.png" width="30" height="30"> +91 709-705-7777 </a> <br>
    <a id="i1" href="mailto: chateadarsh7777@gmail.com"> <img src="img/email.png" width="30" height="30"> Email: balajihotel@gamil.com </a> <br>
    <a id="i1" href="https://goo.gl/maps/nqSAsdmyeB9g68SR8"> <img src="img/loc.png" width="30" height="30"> 52,Pune-Solapur Rd,indraprashtha Society, Hadapsar </a> <br>
  </h4>
  </p>



  <div class="container007">

    <form method="POST" action="collect.php">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="ft" placeholder="Your name.." required onkeypress="return (event.charCode > 64 && event.charCode < 91) ||         (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lt" placeholder="Your last name.." required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Contact </label>
        </div>
        <div class="col-75">
          <input type="text" name="ct" placeholder="Contact No / Email.." required minlength="10">
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
      <div class="row"> &nbsp; &nbsp; &nbsp;
        <input type="submit" value="Submit">

      </div>
    </form>
  </div>



  <a href="https://api.whatsapp.com/send?
phone= +917097057777
&text=hello" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>



  <div class="about-section">
    <h3>About Us</h3>
    <h3> Is an ISO 9001:2015 (Quality Management System) certified hotel chain</h3>

    <hr>
    <marquee style="font-size:14px; position:static;"> Balaji Hotel-Our Information Technology infrastructure enables
      us to respond to you quickly.24X7 | Contact us | Email:sky@travel.com | Phone: +91 709 705 7777 |
    </marquee>
    <hr>


    <p class="p2">• Online hotel booking websites have a large variety of options for users. <br>
      • These websites provide lots of information for customers, which make decision making easy.<br>
      • It is much easier to make payments on the travel websites than offline booking. You can book online from the comfort of your homes.<br>
      • Hotel booking websites have many discounts and offers that are available, which make bookings affordable.<br>
      • Hotel booking websites allow booking that is available 24/7. Therefore you can make a booking at any point in time. <br>

      - We provide our guests with a superior hospitality experience at excellent value in the market segment they want. <br><br>
      - We provide our employees with a great work environment, treating each other with respect and dignity, continuous satisfaction and growth opportunities.<br>
      - We recognize that profitability is essential to our future success and therefore provide our property owners and investors with the highest possible returns.<br>
      - We focus on growth and maintain consistency in our deliverables through warm, personalized service and absolute transparency in all our dealings.<br>
      - We contribute positively to our communities and our environment. <br>
      <br>
    </p>

    <iframe class="mymp" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5350.87501333726!2d73.94505417441128!3d18.499958631828925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c35ca0bcda9f%3A0x47678610cf47fd4d!2sHotel%20Dreams%20-%20Hotel%20in%20Hadapsar!5e0!3m2!1sen!2sin!4v1639243438439!5m2!1sen!2sin" width="80%" height="50%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p>Copyright © 2022 Balaji.Tech Online Private Limited, India. All rights reserved</p>

  </div>
</body>

</html>


<?php include('footer.php'); ?>
<!-- bottom bar  -->