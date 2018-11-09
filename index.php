<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>Malawi 411</title>
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
         <script>
          new WOW().init();
        </script>
<!--//end-animate-->
    </head>
    <body>
        <div id="page">
            <!---header top---->
            
            <!--header--->
            <?php include('includes/headervc.php');?>
            <!--end-->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                    
                </ol>
                <div class="carousel-inner">
                    
                    <div class="item active"> <img src="images/slider_advert2.jpg" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                          <!--  <h1>Malawi 411<br> spa & Resort</h1> -->
                        </div>
                    </div>
                    <div class="item"> <img src="images/slider_advert3.jpg" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                           <!--  <h1>Malawi 411<br> spa & Resort</h1>-->
                        </div>
                    </div>
                    <div class="item"> <img src="images/slider_advert4.jpg" style="width:100%; height: 500px" alt="Fourth slide">
                        <div class="carousel-caption">
                          <!--   <h1>Malawi 411<br> spa & Resort</h1>-->
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

            <!--service block--->
            <section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                 <a href="resort.php">   <img alt="image" class="img-responsive" src="images/icons/resort.png"></a>
                                </div>
                                <h4><a href="resort.php">RESORTS</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                 <a href="restaurant.php">     <img alt="image" class="img-responsive" src="images/icons/dish.png"></a>
                                </div>
                                <h4><a href="restaurant.php">RESTAURANTS</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/hotel.png">
                                </div>
                                <h4><a>HOTELS/LODGES</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/rental.png">
                                </div>
                                <h4><a>CAR RENTALS</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="images/room1.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>family room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="images/room2.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room2.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>superior room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="images/room3.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room3.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>single room</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="images/room4.png">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room4.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>double room</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--offer block-->
            <section class="vacation-offer-block">
                <div class="vacation-offer-bgbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="vacation-offer-details">
                                    <h1>Your vacation Awaits</h1>
                                    <h4>Check out the beautiful destinations all over Malawi.</h4>
                                    <button type="button" class="btn btn-default"><a href="resort.php">Choose a Destination</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End-->

            <!----resort-overview--->
            <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img src="images/category1.png" class="img-responsive" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a>Luxury Resort</a></h3>
                                    <p>Time is the greatest luxury. In today's non-stop world, every second counts - so spending time with people you love is more and more precious. </p>
                                    <div class="links"><a href="resort.php">Find out</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img alt="image" class="img-responsive" src="images/category2.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a>Luxury Room</a></h3>
                                    <p> High-quality furnishings with opulent, expensive touches, attention to aesthetic detail, a quiet room with fresh air, original art on the walls.</p>
                                    <div class="links"><a href="resort.php">Find out</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a>Relaxation</a></h3>
                                    <p>When planning time away, anything that can help to get us where we're going quickly and easily is incredibly valuable.</p>
                                    <div class="links"><a href="resort.php">Find out</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb">
                                    <div class="image txt-rgt">
                                        <a class="arrow-left"><img src="images/category3.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a>Heavenly Cuisine</a></h3>
                                    <p>“I think the most heavenly food is fluffy white clouds.”,Jarod Kintz,</p>
                                    <div class="links"><a href="restaurant.php">Find out</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb txt-rgt">
                                    <div class="image">
                                        <a class="arrow-left"><img src="images/category4.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </section>

            <!-----blog slider----->
            <!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            <!-- Wrapper for slides -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="blog-box">
                                        <p>Good Resort we had a very good time there. The whole building is really beautiful with a lot of flowers and birds around. A nice beach is just 50 meters away. Food is good, parking was Ok and all personnel working there were very helpful.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Silvia Cho Hucko</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>On reading some reviews it might put you off but don’t let it. The hotel is clean and the staff friendly. This is the second year of visiting this hotel. We are a family of six and have enjoyed both trips. Food was certainly better than the first year but still room for a little improvement but at the end of the day you pay for what you get. We used the courtesy transport this year which was a small fee but compared to taxi prices.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Julia Boutin</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>We got a good conference room to arrange our bridge tournament for free, but each page of printout cost us 1 € which is the most expensive prints I ever have experienced. Therefore we did not have budget to take out 30 pages with results every day, which the participants of course complained about.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Anastasia Marzi</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>

            <!---blog block--->
            

            <!---footer--->
           
<?php include('includes/footer.php');?>
            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        <!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
<!-- //write us -->
    </body>
</html>
