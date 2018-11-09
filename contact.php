
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
            <!--header--->
            <?php include('includes/headervc.php');?>
            <!--end-->
            <section class="image-head-wrapper">
                <div class="inner-wrapper">
                    <h1>Contact Us</h1>
                </div>
            </section>
            <div class="clearfix"></div>


            <section class="contact-block">
                <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <h3><span>Contact </span>Us</h3>
                        <p class="text-left">Don't be shy, drop us a line.</p>
                        <p class="text-right">Plot #1390 Area 18 A, Lilongwe, Malawi. <i class="fa fa-map-marker fa-lg"></i></p>
                        <p class="text-right"><a href="tel:+265 998 331 319"> +265 998 331 319 <i class="fa fa-phone fa-lg"></i></a></p>
                        <p class="text-right"><a href="mailto:demo@info.com"> kamwanika@creativity-mw.com <i class="fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h3>Send a <span>Message</span></h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            <textarea class="form-control" name="Message" placeholder="Message Here...." required=""></textarea>
                            <input type="submit" class="submit-btn" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>

            <!---map--->
            <section class="offspace-70">
                <div class="map">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15489.267314479694!2d33.76710177826127!3d-13.939731392848277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sArea+18+A%2C+Lilongwe%2C+Malawi!5e0!3m2!1sen!2sza!4v1537983366557"  frameborder="0" style="border:0; width: 100%; height: 400px" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            
            
            <!---footer--->
           
            <?php include('includes/footer.php');?>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        <?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
    </body>
</html>
