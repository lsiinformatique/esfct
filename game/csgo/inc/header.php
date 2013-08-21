<?php
$host = "localhost";
$user = "root";
$pass = "";
$base = "esfct";

mysql_connect($host,$user,$pass);
mysql_select_db($base);

$rootsite = "http://localhost/esfct site final/game/csgo/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>ESFCT - Counter Strike GO</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/main.css" />
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/devices.css" />
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/post.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/paralax_slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>stylesheets/style.css">
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="<?php echo $rootsite; ?>stylesheets/jquery.fancybox.css?v=2.1.2" type="text/css"  media="screen" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40560552-2', 'esfct.com');
  ga('send', 'pageview');

</script>
<!--[if IE]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->


</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="#"><img alt="alt_example" src="http://www.esfct.Com/site/images/logo-esfct.png"  /></a>
      <div id="social_ctn"> 
      
      <a class="social_t"><img alt="alt_example" src="<?php echo $rootsite; ?>images/social_tleft.png" /></a> 
  
      <!-- <a href="#" id="rss"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a>  -->
      <a href="https://www.facebook.com/Esfct" id="facebook"><img alt="alt_example" src="<?php echo $rootsite; ?>images/blank.gif" width="100%" height="37px" /></a> 
      <a href="https://twitter.com/ESFCT" id="twitter"><img alt="alt_example" src="<?php echo $rootsite; ?>images/blank.gif" width="100%" height="37px" /></a>  
      <a href="https://plus.google.com/u/1/b/114948159129281803376/" id="google_plus"><img alt="alt_example" src="<?php echo $rootsite; ?>images/blank.gif" width="100%" height="37px" /></a>
      <a href="http://www.youtube.com/channel/UC_wHPFf1PlNDLKPKlFinWQA" id="you_tube"><img alt="alt_example" src="<?php echo $rootsite; ?>images/blank.gif" width="100%" height="37px" /></a> 
    
	  <a class="social_t" ><img alt="alt_example" src="<?php echo $rootsite; ?>images/social_tright.png" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in"> 
    
    <!--********************************************* Mainmenu Start *********************************************-->
    <div id="menu_wrapper">
      <div id="menu_left"></div>
      <center>
      <ul id="menu">
        <li><a href="<?php echo $rootsite; ?>index.php">Home</a></li>
        <li><a href="<?php echo $rootsite; ?>index.php">Forum CSGO</a></li>
        <li><a href="<?php echo $rootsite; ?>tournoi.php">Tournoi</a></li>
        <li><a href="<?php echo $rootsite; ?>classement.php">Classement</a></li>
        <li><a href="<?php echo $rootsite; ?>admin.php">Devenir admin ESFCT-CSGO</a></li>
        <li><a href="http://www.esfct.com/site/">Retour à ESFCT</a></li>
      </ul>
    </center>
        <a href="#" id="pull">Menu</a>

      </div>
      <div class="clear"></div>
    </div>