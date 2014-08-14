<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $description ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<meta name="author" content="<?php echo $author ?>" />
	<link rel="shortcut icon" href="img/favicon.png">

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.min.css");?>">

    
    <!--external css-->
    <link href="<?php echo base_url(ASSETS."font-awesome/css/font-awesome.css");?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(CSS."flexslider.css");?>">
    

    <link href="<?php echo base_url(ASSETS."bxslider/jquery.bxslider.css");?>" rel="stylesheet" />
    <link href="<?php echo base_url(ASSETS."fancybox/source/jquery.fancybox.css");?>" rel="stylesheet" />
    
    <link href="<?php echo base_url(ASSETS."revolution_slider/css/rs-style.css");?>" rel="stylesheet" media="screen" />
    <link href="<?php echo base_url(ASSETS."revolution_slider/rs-plugin/css/settings.css");?>" rel="stylesheet" media="screen" />
    
    <link href="<?php echo base_url(ASSETS."jquery-ui/css/custom-theme/jquery-ui-1.10.4.custom.min.css");?>" rel="stylesheet" />

     <link rel="stylesheet" href="<?php echo base_url(CSS."style.css");?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<?php echo $body ?>
	<!-- js placed at the end of the document so the pages load faster -->
    <!--  script src="<?php echo base_url(JS."jquery.js");?>"></script>  -->
    <script src="<?php echo base_url(JS."jquery-1.8.3.min.js");?>"></script>
    <script src="<?php echo base_url(JS."bootstrap.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(JS."hover-dropdown.js");?>"></script>
    <script defer src="<?php echo base_url(JS."jquery.flexslider.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(ASSETS."bxslider/jquery.bxslider.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(JS."jquery.parallax-1.1.3.js");?>"></script>
    <script src="<?php echo base_url(JS."jquery.easing.min.js");?>"></script>
    <script src="<?php echo base_url(JS."link-hover.js");?>"></script>
    <script src="<?php echo base_url(ASSETS."fancybox/source/jquery.fancybox.pack.js");?>"></script>
    <script src="<?php echo base_url(ASSETS."noty/packaged/jquery.noty.packaged.min.js");?>"></script>
    <script src="<?php echo base_url(ASSETS."noty/layouts/top.js");?>"></script>
    <script src="<?php echo base_url(ASSETS."noty/themes/default.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(ASSETS."revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(ASSETS."revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(ASSETS."jquery-ui/js/jquery-ui-1.10.4.custom.min.js");?>"></script>  
    <script src="<?php echo base_url(JS."jquery.blockUI.js");?>"></script>
    
    <!--common script for all pages-->
    <script src="<?php echo base_url(JS."common-scripts.js");?>"></script>
    <script src="<?php echo base_url(JS."revulation-slide.js");?>"></script>
    <script src="<?php echo base_url(JS."main.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url(JS."register.js");?>"></script>

   <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script> -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCotZjhwqwQ-4UjBvZHJNrQK0Yew5M2sOQ&sensor=true"></script> 
  <script src="<?php echo base_url(JS."google-region.js");?>"></script> 

  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();
      

  </script>

  
  
  

</body>
</html>
