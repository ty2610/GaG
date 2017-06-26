<html>

    <head>
        <title>Giant Airsoft Game</title>
        <!-- Jquery and BootStrap js files -->
        <script type="text/javascript" src="js/Vendor/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/Vendor/bootstrap.js"></script>
        <!-- CSS for BootStrap -->
        <link href="css/Vendor/bootstrap.css" rel="stylesheet">
        <link href="css/Vendor/bootstrap-theme.css" rel="stylesheet">
        <!-- local css and js -->
        <link rel="stylesheet" href="css/home.css">
        <!-- global css -->
        <link rel="stylesheet" href="css/global.css">

    </head>

    <body>
        <script>
            $(document).ready(function(){

                $("#wholeDiv").hover(
                    function(){
                        $("#contentHolder").stop().slideDown();
                    },
                    function () {
                        $("#contentHolder").stop().slideUp();
                        setTimeout(function() {
                            if($("#contentHolder").is(':hidden'))
                            {
                                $("#alertBox").stop().show("slow");
                            }
                        }, 5000);
                    });
            });
        </script>
        <div class="container" id="wholeDiv">

            <!-- NavBar -->
            <nav id="navBarTop" class="navbar navbar-inverse" style="line-height:2.5">
                <a class="navbar-brand navlogo" href="http://www.twincitiesairsoft.com/index.html">
                    <img src="img/twin_cities_airsoft_logo_small.png">
                </a>
                <ul class="nav nav-justified">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Details</a>
                    </li>
                    <li>
                        <a href="#">Map</a>
                    </li>
                    <li>
                        <a href="#">Rules</a>
                    </li>
                    <li>
                        <a href="http://localhost:63342/GaG/registration.php">Registration</a>
                    </li>
                    <li>
                        <a href="#">Pictures</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- End NavBar -->
            <!-- Error Alert -->
            <div id="alertBox" class="alert alert-info collapse" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                You must hover over the navagation bar to repopulate the page.
            </div>
            <!-- End Error Alert -->

            <!-- holder for everything but navbar -->
            <div id="contentHolder">
                <!-- Clash section -->
                <div id="Clash" class="row stripeBox loseMargin">
                    <div class="col-md-3">
                        <ul class="list-group" style="box-shadow:none">
                            <li class="list-group-item listLoseBackground" style="border: none">
                                <h3>Giant Airsoft Game VIII</h3>
                            </li>
                            <li class="list-group-item listLoseBackground" style="border: none">
                                <h3>2261 130th Ave Baldwin, WI 54013</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="img/WhiteSword.png">
                    </div>
                    <div class="col-md-3">
                        <h3 style="color:white">October 7th-8th, 2017</h3>
                    </div>
                </div>
                <!-- End Clash Section -->
                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide carouselBackground" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner fixingSizeCar" role="listbox">
                        <div class="item peopleCarouselImg active">
                            <img class="d-block img-fluid" src="img/honeyBadger.jpg" alt="First slide">
                        </div>
                        <div class="item peopleCarouselImg">
                            <img class="d-block img-fluid" src="img/lil%20Reb.jpg" alt="Second slide">
                        </div>
                        <div class="item peopleCarouselImg">
                            <img class="d-block img-fluid" src="img/MahemField.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- End Carousel -->
            </div>

        </div>
    </body>

</html>
