<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SRN Seeds">

    <!-- ========== Page Title ========== -->
    <title>SRN Seeds</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/shop.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>

.whatsapp-button{
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 99;
    background-color: #25d366;
    border-radius: 50px;
    color: #ffffff;
    text-decoration: none;
    width: 50px;
    height: 50px;
    font-size: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    -webkit-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    -moz-box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    box-shadow: 0px 0px 25px -6px rgba(0,0,0,1);
    animation: effect 5s infinite ease-in;
}

@keyframes effect {
    20%, 100% {
        width: 50px;
        height: 50px;
        font-size: 30px;
    }
    0%, 10%{
        width: 55px;
        height: 55px;
        font-size: 35px;
    }
    5%{
        width: 50px;
        height: 50px;
        font-size: 30px;
    }
}
    </style>

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Main Nav -->
                <div class="main-nav-content">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <img src="assets/img/logo.png" alt="Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>

                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="dropdown">
                                <a href="index.php" data-toggle="dropdown">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="product.php" data-toggle="dropdown" class="dropdown-toggle">Products <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.php?category=cereal">Cereal crops</a></li>
                                    <li><a href="shop.php?category=fodder">Fodder crops</a></li>
                                    <li><a href="shop.php?category=pulses">Pulses crops</a></li>
                                    <li><a href="shop.php?category=oilseeds">Oil Seeds crops</a></li>
                                    <li><a href="shop.php?category=vegetable">Vegetable & fruit crops</a></li>
                                    <li><a href="shop.php?category=kitchen">Kitchen garden products</a></li>
                                    <li><a href="shop.php?category=flower">Flower seeds</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="download-brochure.php" data-toggle="dropdown">Download Brochure</a>
                            </li>
                            <li class="dropdown">
                                <a href="about-us.php" data-toggle="dropdown">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="faq.php" data-toggle="dropdown">FAQ's</a>
                            </li>
                            <li class="dropdown">
                                <a href="contact-us.php" data-toggle="dropdown">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                    <div class="attr-right">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="contact">
                                    <div class="call">
                                        <div class="icon">
                                            <i class="fas fa-comments-alt-dollar"></i>
                                        </div>
                                        <div class="info">
                                            <p>Have any Questions?</p>
                                            <h5><a href="mailto:info@srnseeds.com">info@srnseeds.com</a></h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->

                    </div>

                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->

                </div>
                <!-- Main Nav -->

            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
    <a target="_blank" href="https://wa.me/919928024428?text='Hi I have a query regarding the SRN Seeds Products.'" class="whatsapp-button"><i class="fab fa-whatsapp"></i></a>