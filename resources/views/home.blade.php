<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>L'ESTIME</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logoGold.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/logoGold.png" alt=""></a>
            </div>
            <div class="text-start">
                <p>
                    Fondé en 2015 par des professionnels passionnés de la parfumerie,
                    L'ESTIME - Global Perfumes House est une société spécialisé dans la Production et la commercialisation des produits cosmétiques,
                    de parfums, et de produits d'hygiène corporelle. Depuis le premier jour,
                    l'objectif de L'ESTIME vise l'excellence, la qualité et le service...
                </p>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{route('ecommerce.show',['id' => 1])}}">
                        <img src="img/bg-img/1.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 01</p>
                            <h4>L'ESTIME M'Sila</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                <a href="{{route('ecommerce.show',['id' => 2])}}">
                        <img src="img/bg-img/2.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 02</p>
                            <h4>L'ESTIME Alger Plage</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                <a href="{{route('ecommerce.show',['id' => 3])}}">
                        <img src="img/bg-img/3.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 03</p>
                            <h4>L'ESTIME Bousaada</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                
                <div class="single-products-catagory clearfix">
                <a href="{{route('ecommerce.show',['id' => 4])}}">
                        <img src="img/bg-img/10.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 04</p>
                            <h4>L'ESTIME Djelfa</h4>
                        </div>
                    </a>
                </div>
                <div class="single-products-catagory clearfix">
                <a href="{{route('ecommerce.show',['id' => 5])}}">
                        <img src="img/bg-img/11.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 05</p>
                            <h4>L'ESTIME Daliy Ibrahim</h4>
                        </div>
                    </a>
                </div>
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                <a href="{{route('ecommerce.show',['id' => 6])}}">
                        <img src="img/bg-img/12.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>Magasin de L'ESTIME N° 06</p>
                            <h4>L'ESTIME Oran</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logoWhite.png" alt="" width="110px" height="110px"></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://goldenideas.live" target="_blank">Golden Ideas</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                </div>
                <div class="col-12 col-lg-3">
                    <div class="single_widget_area">
                      <h1>Contact US</h1>
                        
                        <div class="social-info d-flex justify-content-between">
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1">
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>