<html>

    <head>
        <title>Giant Airsoft Game</title>
        <!-- Jquery and BootStrap js files -->
        <script type="text/javascript" src="js/Vendor/jquery-3.2.1.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <script type="text/javascript" src="js/Vendor/bootstrap.js"></script>
        <!-- CSS for BootStrap -->
        <link href="css/Vendor/bootstrap.css" rel="stylesheet">
        <link href="css/Vendor/bootstrap-theme.css" rel="stylesheet">
        <!-- local css and js -->
        <link rel="stylesheet" href="css/home.css">
        <!-- global css -->
        <link rel="stylesheet" href="css/global.css">
        <!-- trying Flickity Stuff -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>

    </head>

    <body>
        <script>
            $(document).ready(function(){
                $("#carouselExampleIndicators").carousel();

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
        <div class="container-fluid containerWidth" id="wholeDiv">

            <!-- NavBar -->
            <nav class="navbar navbar-inverse bg-inverse fifteenMarginBottom">
                <!--<a class="navbar-brand" href="http://www.twincitiesairsoft.com/index.html">
                    <img src="img/twin_cities_airsoft_logo_small.png">
                </a> -->
                <ul class="nav nav-justified">
                    <li class="nav-item">
                        <a class="navlogo" href="http://www.twincitiesairsoft.com/index.html">
                            <img src="img/twin_cities_airsoft_logo_small.png">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/details.php">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rules.php">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:darrinjohnson@comcast.net">Contact</a>
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
                            <li class="list-group-item listLoseBackground" style="border: none;">
                                <h3>Giant Airsoft Game VIII</h3>
                            </li>
                            <li class="list-group-item listLoseBackground" style="border: none;">
                                <h3>2261 130th Ave Baldwin, WI 54013</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <img class="scaleBattleImage" src="img/WhiteSword.png">
                    </div>
                    <div class="col-md-3 padTopTwelve">
                        <h3 style="color:white">October 7th-8th, 2017</h3>
                    </div>
                </div>
                <!-- End Clash Section -->
                <!-- Carousel -->
                <div class="flickity-carousel" data-flickity>
                    <div class="carousel-cell">
                        <div class="container tenMarginTop">
                            <div class="carousel-caption d-md-block">
                                <img class="scaleImage" src="img/honeyBadger.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="container tenMarginTop">
                            <div class="carousel-caption d-md-block">
                                <img class="scaleImage" src="img/lil%20Reb.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="container tenMarginTop">
                            <div class="carousel-caption d-md-block">
                                <img class="scaleImage" src="img/MahemField.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Carousel -->
            </div>

        </div>
    </body>

</html>
