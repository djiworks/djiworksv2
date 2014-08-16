<?php
/* Procedure d'anti injection des pages */
$pagetab = array(
		'mentions' => 'ment.html',
		'accueil' => 'acc.html',
		'multimedia' => 'media.html',
		'photo' => './photo/photo.html',
		'paysage' => './photo/paysage.php',
		'fleur' => './photo/flower.php',
		'divers' => './photo/divers.php',
		'england' => './photo/england.php',
		'animal' => './photo/animal.php',
		'panorama' => './photo/pan.php',
		'programmation' => './prog/prog.html',
		'mobile' => './prog/mobile.html',
		'web' => './prog/web.html',
		'logiciel' => './prog/logiciel.html'
);

$titletab = array(
		'mentions' => 'DjiWorks par Djothi Grondin : Mentions l&eacute;gales',
		'accueil' => 'DjiWorks, Site personnel de Djothi Grondin, Portefolio des photographies, du multim&eacute;dia et du d&eacute;veloppement web, mobile et logiciel',
		'multimedia' => 'DjiWorks par Djothi Grondin : D&eacute;couvrez mes comp&eacute;tences en Multim&eacute;dia : Cartes de visite, Logos, Affiches, Vid&eacute;os...',
		'photo' => 'DjiWorks par Djothi Grondin : D&eacute;couvrez mes photos sur divers th&egrave;mes',
		'paysage' => 'DjiWorks par Djothi Grondin : La Photographie de paysages',
		'fleur' => 'DjiWorks par Djothi Grondin : La Photographie de fleurs',
		'divers' => 'DjiWorks par Djothi Grondin : La Photographie diverse',
		'england' => 'DjiWorks par Djothi Grondin : La Photographie de l\'Angleterre',
		'animal' => 'DjiWorks par Djothi Grondin : La Photographie d\'animaux',
		'panorama' => 'DjiWorks par Djothi Grondin : La Photographie panoramique',
		'programmation' => 'DjiWorks par Djothi Grondin : D&eacute;couvrez mes comp&eacute;tences en Programmation informatique : D&eacute;veloppement Web, Mobile et Logiciel',
		'mobile'=>'DjiWorks par Djothi Grondin : D&eacute;couvrez mes comp&eacute;tences en D&eacute;veloppement Mobile : Android, iOS, Windows Phone...',
		'web' => 'DjiWorks par Djothi Grondin : D&eacute;couvrez mes comp&eacute;tences en D&eacute;veloppement Web : HTML, CSS, Javascript, jQuery, Drupal, Joomla',
		'logiciel' => 'DjiWorks par Djothi Grondin : D&eacute;couvrez mes comp&eacute;tences en D&eacute;veloppement Logiciel : C++, C#, Java, VB'
);

$breadtab = array(
		'mentions' => '<a href="index.php">Accueil</a> > Mentions l&eacute;gales',
		'accueil' => 'Accueil',
		'multimedia' => '<a href="index.php">Accueil</a> > Multim&eacute;dia',
		'photo' => '<a href="index.php">Accueil</a> > Photographie',
		'paysage' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Paysages',
		'fleur' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Fleurs',
		'divers' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Divers',
		'england' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Angleterre',
		'animal' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Animaux',
		'panorama' => '<a href="index.php">Accueil</a> > <a href="photo.html">Photographie</a> > Panoramas',
		'programmation' => '<a href="index.php">Accueil</a> > Programmation',
		'mobile' => '<a href="index.php">Accueil</a> > <a href="programmation.html">Programmation</a> > Mobile',
		'web' => '<a href="index.php">Accueil</a> > <a href="programmation.html">Programmation</a> > Web',
		'logiciel' => '<a href="index.php">Accueil</a> > <a href="programmation.html">Programmation</a> > Logiciel'
);

$keytab = array(
		'mentions' => 'mentions l&eacute;gales, informations l&eacute;gales, djiworks',
		'accueil' => 'djothi, grondin, site personnel, djothi grondin, photo de djothi, site internet de djothi, site web de djothi, la r&eacute;union, &eacute;le de la r&eacute;union, 974, djiworks',
		'multimedia' => 'cr&eacute;ations multim&eacute;dia de djothi, multim&eacute;dia, djiworks',
		'photo' => 'photographie, photo de djothi, paysage, fleur, panorama, la r&eacute;union, 974, &eacute;le de la r&eacute;union, photo de la r&eacute;union, djiworks',
		'paysage' => 'paysage, djiworks',
		'fleur' => 'fleur, djiworks',
		'divers' => 'photo, djiworks',
		'england' => 'photo, djiworks, angleterre, new romney, londres, london, wembley',
		'animal' => 'photo, djiworks, animaux, animal, nature',
		'panorama' => 'photo panoramique, panorama, prise de vue panoramique, djiworks',
		'programmation' => 'visual basic, c#, c, c++, Java, programmation, d&eacute;veloppement, mobile, logiciel, software, web, site internet, php, javascript, html, html5, css, css3, d&eacute;veloppement web, d&eacute;veloppement logiciel, d&eacute;veloppement mobile, djiworks',
		'mobile' => 'mobile, smartphone, d&eacute;veloppement mobile, responsive design, C#, djiworks',
		'web' => 'web, d&eacute;veloppement web, cr&eacute;ation site internet, php, javascript, jquery, css3, html5, cms, application web, djiworks',
		'logiciel' => 'logiciel, application, java, c#, visual basic, c, c++, loca++, mynms, djiworks'
);

$destab = array(
		'mentions' => 'Mentions l&eacute;gales et Conditions G&eacute;n&eacute;rales d\'Utilisation du site',
		'accueil' => 'DjiWorks est le site personnel de Djothi Grondin vous permettant de d&eacute;couvrir l\'ensemble de ses cr&eacute;ations informatiques, multim&eacute;dias mais aussi photographiques.',
		'multimedia' => 'Cette section multim&eacute;dia expose les cr&eacute;ations graphiques et les montages vid&eacute;os de Djothi Grondin',
		'photo' => 'Cette album photo class&eacute; par th&egrave;me vous permettra de d&eacute;couvrir de nombreuses photo amateur',
		'paysage' => 'D&eacute;couvrez des photographies de paysages divers et vari&eacute;s',
		'fleur' => 'D&eacute;couvrez des macrophotographies de fleurs diverses et vari&eacute;es',
		'divers' => 'D&eacute;couvrez des photographies abstraites ou connot&eacute;es',
		'england' => 'D&eacute;couvrez des photographies de l\'Angleterre prises lors d\'un de mes s&eacute;jours',
		'animal' => 'D&eacute;couvrez des photographies d\' animaux prises sur le vif',
		'panorama' => 'D&eacute;couvrez des photographies panoramiques de montagnes, de villes ou encore de plages.',
		'programmation' => 'Retrouvez dans cette section programmation, l\'ensemble des projets men&eacute;s et des langages utilis&eacute;s lors de mes exp&eacute;riences',
		'mobile' => 'Les d&eacute;veloppements pour mobile que j\'ai pu effectuer se trouvent par ici',
		'web' => 'Les d&eacute;veloppements web que j\'ai pu men&eacute; se trouvent par ici',
		'logiciel' => 'Les d&eacute;veloppements logiciels que j\'ai pu concevoir se trouvent par ici'
);

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Les m&eacute;ta -->
    <title>
    <?php 
    if ( (isset($_GET['page'])) && (isset($titletab[$_GET['page']])) )
 	echo $titletab[$_GET['page']];
    else
    echo $titletab['accueil'];
    ?>
    </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="
    <?php 
    if ( (isset($_GET['page'])) && (isset($titletab[$_GET['page']])) )
    	echo $keytab[$_GET['page']];
    else
    	echo $keytab['accueil'];
    ?>
    " />
    
    <meta name="description" content="
    <?php 
    if ( (isset($_GET['page'])) && (isset($titletab[$_GET['page']])) )
    	echo $destab[$_GET['page']];
    else
    	echo $destab['accueil'];
    ?>" />
    
    <meta name="author" content="Djothi Grondin">
     <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
    <!-- Les styles -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" type="text/css" href="./css/flexslider.css" />
    <link rel="stylesheet" type="text/css" href="./css/photoswipe.css" />
    <link rel="stylesheet" type="text/css" href="./css/base.css" />
    <link rel="stylesheet" type="text/css" href="./css/layout.css" />
    <link rel="stylesheet" type="text/css" href="./css/skeleton.css" />
    <link rel="shortcut icon" href="images/favicon.ico" />
   	
   	<!-- Les scripts -->
   	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="./js/klass.min.js"></script>
	<script type="text/javascript" src="./js/code.photoswipe.jquery-3.0.5.min.js"></script> 
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="./images/used/favicon.ico">
	<link rel="apple-touch-icon" sizes="72x72" href="./images/used/touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="./images/used/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="./images/used/touch-icon-ipad-retina.png" />
	
</head>

<body>
	<div class="hide_phone hide_tab" id="espace_pub"><a href="http://1and1.fr/xml/order?k_id=203042141" target="_blank"><img src="http://adimg.uimserv.net/1und1/Werbemittel_FR/wh_an_160x600.gif" width="160" height="600"  border="0"/></a></div>
    <div id="site" class="container">
       <header>
      	<div class="two columns">
      	<a id="logo" href="http://www.djiworks.fr/"></a>
       </div>
       <div class="fourteen columns">
	       <nav id="menu">
	             <ul>
	                <li><a href="accueil.html">Accueil</a></li>
	                <li><a href="photo.html">Photographie</a></li>
	                <li><a href="multimedia.html">Multim&eacute;dia</a></li>
	                <li><a href="programmation.html">Programmation</a></li>
	                <li><a href="http://www.doyoubuzz.com/djothi-grondin" target="_blank">Mon CV</a></li>
	                <li><a href="mailto:djothi.grondin(at)djiworks.fr?subject=[DjiWorks]">Contact</a></li>
	             </ul>
	       </nav>
       </div>
       </header>
       <hr/>
       <div class="sixteen columns">
       <section id="breadcrumbs" class="hide_phone">
       <?php
      if ( (isset($_GET['page'])) && (isset($breadtab[$_GET['page']])) ) 
						{
							echo "Vous &ecirc;tes ici : ".$breadtab[$_GET['page']];   
						} 
		?>
       </section>
       </div>
       <div class="sixteen columns">
       <section id="mainContent">
       <?php
      if ( (isset($_GET['page'])) && (isset($pagetab[$_GET['page']])) ) 
						{
							// Nous appelons le contenu central de la page
							require_once($pagetab[$_GET['page']]);   
						} 
						else 
						{
							// Page par dÈfault quand elle n'existe pas dans le tableau
						    require_once("acc.html"); 
						}
		?>
       </section>
       </div>
       <div class="one-third column">
       <nav id="link_web">
       <img alt="logo_bookmark" src="images/used/bookmark.png" class="ico"/>
       	<h2>Mes favoris</h2> 
       	<hr/>
      	<ul>
      		<li><a href="http://www.siteduzero.com/">Site du Z&eacute;ro</a></li>
      		<li><a href="http://www.developpez.com">Developpez.com</a></li>
            <li><a href="http://www.codes-sources.com">CodeS-SourceS</a></li>
		</ul> 
		</nav>
		</div>
		<div class="one-third column">
       	<nav id="link_cours">
       	<img alt="logo_cours" src="images/used/cours.png" class="ico"/>
       	<h2>Des cours</h2> 
       	<hr/>
      	<ul>
      		<li><a href="http://payet.please.re/">Denis Payet, Ma&icirc;tre de conf&eacute;rence</a></li>
            <li><a href="http://personnel.univ-reunion.fr/courdier/cours/index.html">R&eacute;my Courdier, Professeur d'universit&eacute;</a></li>
            <li><a href="http://www.defay.net">Nicolas Defa&yuml;, Enseignant en informatique</a></li>
		</ul> 
		</nav>
		</div>
		<div id="share_links" class="one-third column">
       	<img alt="logo_share" src="images/used/share.png" class="ico"/><h2>Partager</h2>
       	<hr/>
      		<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone"></div>

			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  window.___gcfg = {lang: 'fr'};
			
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
			<br/>
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div class="fb-like" data-href="http://www.djiworks.fr" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
			<script type="text/javascript">var viadeoWidgetsJsUrl = document.location.protocol+"//widgets.viadeo.com";(function(){var e = document.createElement('script'); e.type='text/javascript'; e.async = true;e.src = viadeoWidgetsJsUrl+'/js/viadeowidgets.js'; var s = document.getElementsByTagName('head')[0]; s.appendChild(e);})();</script><div class="viadeo-share" data-url="www.djiworks.fr" data-display="btnlight" data-count="right" data-language="fr" data-partner-id="EOdubjbyEgewhdgdIzwvOeqDOc"></div>		
		</div>
		<div class="sixteen columns">		
       <footer>
        <p>&copy;DjiWorks par Djothi Grondin 2013 | Tous droits r&eacute;serv&eacute;s | <a href="mentions.html" rel="nofollow">Mentions l&eacute;gales</a> | Site compatible Responsive Design</p>
        
        <p class="hide_phone"><a href="http://www.w3.org/" rel="nofollow">
    	<img src="./images/used/html5.png" alt="HTML5" />
		</a>
       </p>
       </footer>
       </div>
    </div>
</body>
</html>