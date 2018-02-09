<?php
 
/*
PHP LANGUAGE DETECTION SCRIPT
written by Mischa Szeker (www.szeker.ch)
January 21, 2011
*/
 
/* Setting variables */
$langs = array('en', 'fr', 'nl');
$cookie_name = "lang_cookie";
$cookie_domain = "http://www.chambresdhotes-sault.com";
 
if (!empty($_GET['lang']) && in_array($_GET['lang'], $langs)) {
 
    /* Set language */
    $lang = $_GET['lang'];
 
    /* Set cookie */
    $set_cookie = true;
 
} else {
 
    /* Check if cookie exists */
    if ( isset($_COOKIE[$cookie_name]) AND !empty($_COOKIE[$cookie_name]) AND in_array($_COOKIE[$cookie_name], $langs) ) {
 
        /* Get cookie and set language*/
        $lang = $_COOKIE[$cookie_name];
 
    } else {
 
        /* Get browser language */
        if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
          $browserlang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
          $li = 999;
          $lang = $langs[0];
          foreach ($langs as $l) {
            $x = strpos($browserlang, $l);
            if ($x !== false && $x<$li) {
              $li = $x;
              $lang = $l;
            }
          }
        } else {
          $lang = $langs[0];
        }
 
        /* Set cookie */
        $set_cookie = true;
 
    }
}
 
/* Debug language output */
//echo $lang;
 
/* Redirect */
header( 'Location: /'.$lang . '/' ) ;
 
/* Finally set cookie */
if ($set_cookie) { setcookie("$cookie_name", $lang, time()+(60*60*24*60), "/", $cookie_domain); }
 
?>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="Mon ventoux bed & breakfast / Chmabres d'hôtes in the provence, Sault.">
    <meta name="author" content="Jonas Goddeeris">
    <title>Bed & Breakfast Sault - Mon Ventoux</title>

    

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   
   	<!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">
    <link href="css/extralayers.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59867496-8', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->



    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slides_bg/kv-monventoux.jpg" alt="slidebg1" data-lazyload="img/slides_bg/kv-monventoux.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption mobileno row white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1" data-start="0" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5;max-width: auto; max-height: auto; white-space: nowrap;">Mon Ventoux 
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption mobileno customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 100%;" data-speed="1" data-start="0" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:18px; text-transform:uppercase;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);">
                             Chambres d'hôtes / Gastenkamers / Bed & Breakfast </div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin  rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="110" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1" data-start="0" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><div class="row">
            <div class="col-md-4">
                <div class="box_home">
                   <a href='fr/index.php?lang=fr' class="button_intro">français</a> 
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_home">
                    <a href='nl/index.php?lang=nl' class="button_intro">Nederlands</a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_home">
                    <div> <a href='en/index.php?lang=en' class="button_intro">English</a> 
                    </div>
                </div>
            </div>
        </div><!-- End row --> 
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption customin tp-resizeme text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="-230" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="2000" data-start="0" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto ; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:37px;text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);width:100%;">
                             <a href='fr/index.html' style="color:#ffffff">Choisissez votre langue</a> / <a href='nl/index.html' style="color:#ffffff">Kies je taal</a> / <a href='en/index.html' style="color:#ffffff">Choose your language</a> </div>
                    </div>

                </li>
          
            </ul>
           
        </div>
    </div>
    <!-- End Slider -->
 
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Contact</h3>
                    <ul id="contact_details_footer">
                        <li>Mon Ventoux - Villa La Lorraine<br> Hameau Saint-Jean F-84390 Sault<br>France</li>
                        <li><a href="tel://0033490640884">33(0) 490 64 08 84</a> 
                        <li><a href="mailto:info@monventoux.com">info@monventoux.com</a></li>
                    </ul>  
                </div>            
                <div class="col-md-2 col-sm-2">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="fr/index.html?lang=fr">Français</a></li>
                        <li><a href="nl/index.html?lang=nl">Nederlands</a></li>
                        <li><a href="en/index.html?lang=en">English</a></li>
                    </ul>
                </div>

            </div><!-- End row -->

            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="https://www.facebook.com/monventoux" target="_blank"><i class="icon-facebook"></i></a></li>
                        </ul>
                        <p>© Monventoux 2016</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<?php
if(count($_COOKIE) > 0) {
     echo "Cookies are enabled.";
} else {
     echo "Cookies are disabled.";
}
?>

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>      

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution_func.js"></script>

</body>
</html>