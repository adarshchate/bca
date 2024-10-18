<?php include('nav.php'); ?>
<!-- including navigation bar -->


<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="img/ic1.png" type="image/gif" sizes="50x50">
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
    .adarsh1{
      margin-top: 70px;
      margin-left: auto;
      margin-right: auto;
    }
    .youtube7 {
      width: 97%;
      height: 80%;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    * {
      box-sizing: border-box;
    }

    .responsive {
      padding: 5px 21px;
      width: 100%;
    }

    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 0px 0;
      }
    }

    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
        padding: 0 0px;
      }

      .youtube7 {
        width: 100%;
        height: 35%;
        margin-left: auto;
        margin-right: auto;
        display: block;
      }
      .adarsh1{
      margin-top: 60px;
    }

  }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>

<body>

  <div class="adarsh1">

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g10.jpg">
          <img src="img/g10.jpg">
        </a>
      </div>
    </div>

    <!-------------https://youtu.be/MLi5DEfHZws------------->
    <iframe class="youtube7" src="https://www.youtube.com/embed/MLi5DEfHZws?start=3&rel=0&loop=0" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g9.jpg">
          <img src="img/g9.jpg">
        </a>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g8.jpg">
          <img src="img/g8.jpg">
        </a>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g7.jpg">
          <img src="img/g7.jpg">
        </a>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/l1.jpg">
          <img src="img/l1.jpg">
        </a>
      </div>
    </div>



    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g2.jpg">
          <img src="img/g2.jpg">
        </a>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="img/g4.jpg">
          <img src="img/g4.jpg">
        </a>
      </div>
    </div>

    <div class="clearfix"></div>
  </div>
</body>

</html>

<?php include('footer.php'); ?>
<!-- bottom bar  -->