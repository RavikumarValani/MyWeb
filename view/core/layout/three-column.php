<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>HeyMartina - Responsive Web</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->

    <!-- Main style sheet -->
    <link href="css/style1.css" rel="stylesheet">  

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="plugins/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugins/owl/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="images/favicon/favicon-32x32.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/favicon-144x144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon/favicon-72x72.ico">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/favicon-54x54.ico">

</head>

<body>

    <!-- Style switcher start -->
    <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-sliders"></i>
        </div>
        <h3>Style Options</h3>
        <button id="preset1" class="btn btn-sm btn-primary"></button>
        <button id="preset2" class="btn btn-sm btn-primary"></button>
        <button id="preset3" class="btn btn-sm btn-primary"></button>
        <button id="preset4" class="btn btn-sm btn-primary"></button>
        <button id="preset5" class="btn btn-sm btn-primary"></button>
        <button id="preset6" class="btn btn-sm btn-primary"></button>
        <br /><br />
        <a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
    </div>
    <!-- Style switcher end -->

    <div class="body-inner">

    <?php echo  $this->getChild('header')->toHtml(); ?>
    <?php echo $this->getChild('content')->toHtml(); ?>
    <?php echo $this->getChild('footer')->toHtml(); ?>
        <!--/ Testimonial end-->

        <!-- Newsletter end -->




    </div><!-- Body inner end -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Style Switcher -->
    <script type="text/javascript" src="plugins/style-switcher.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
    <!-- CD Hero slider -->
    <script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="plugins/isotope.js"></script>
    <script type="text/javascript" src="plugins/ini.isotope.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="plugins/wow.min.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="plugins/waypoints.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb5KGfWAckxCGpoBYfAxNvPuiez5r_rJw"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>

  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

</body>

</html>