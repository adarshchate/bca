
<head>
    <title>Balaji Hotel</title>
    <link rel="icon" href="img/balaji.png" type="image/gif" sizes="5x5">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<style>
    /*newadded css */
.w3_navigation
{
    position:fixed;
    width: 100%;
    top: 0%;
}

</style>

</head>

<body>
   
    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <h1><a class="navbar-brand" href="index.php">Balaji <span>Hotel</span>
                            <p class="logo_w3l_agile_caption"> Your Dreamy Resort </p>
                        </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
                            <li class="menu__item"><a href="rooms.php  " class="menu__link ">Rooms</a></li>
                            <li class="menu__item"><a href="gallary.php" class="menu__link ">Gallery</a></li>
                            <li class="menu__item"><a href="services.php" class="menu__link ">Service</a></li>
                            <li class="menu__item"><a href="cont.php" class="menu__link ">Contact Us</a></li>
                            <li class="menu__item"><a href="admin/admin.php" class="menu__link " target="_blank">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>
    <!-- //header nav bar -->

    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <div class="arr-w3ls">
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span> </a>
    </div>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
