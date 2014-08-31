<!DOCTYPE html>
<html lang="fr">
<head>
	<title> 
		DjiWorks, Site personnel de Djothi Grondin, Portefolio des photos, du multim&eacute;dia et des d&eacute;veloppements web, mobiles et logiciels
	</title>
	
	<!-- Les meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="keywords" content="djothi, grondin, site personnel, djothi grondin, 
    photo de djothi, site internet de djothi, site web de djothi, 
    la r&eacute;union, &eacute;le de la r&eacute;union, 974, djiworks"/>
    
    <meta name="description" content="DjiWorks est le site personnel de Djothi Grondin 
    vous permettant de d&eacute;couvrir l\'ensemble de ses cr&eacute;ations informatiques, 
    multim&eacute;dias mais aussi photographiques."/>
    
    <meta name="author" content="Djothi Grondin">
	
    <!-- Les styles -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
   	
   	<!-- Les scripts -->
   	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="./images/used/favicon.ico">
	<link rel="apple-touch-icon" sizes="72x72" href="./images/used/touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="./images/used/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="./images/used/touch-icon-ipad-retina.png" />
</head>

<body>	
	<?php
		require_once("./menu.html");
		require_once("./banner.html");
		require_once("./presentation.html");
		require_once("./projet.html");
		require_once("./photo.html");
		require_once("./divers.html");
		require_once("./footer.html");
	?>  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bind-polyfill.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script>
    	smoothScroll.init();
	</script>
</body>
</html>