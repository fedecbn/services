<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require ('../.base_connexion.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Les services FCBN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="images/arobase_verte.ico" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start gallery -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
			
	});	
	</script>
<!-- Add fancyBox main JS and CSS files -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>

</head>
<body>
<!-- start header -->
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<!-- start gallery  -->
			<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="connai ressource outil com">Tous</span></li> /
						<li><span class="filter" data-filter="connai">connaissances</span></li> /
						<li><span class="filter" data-filter="ressource">ressources</span></li> /
						<li><span class="filter" data-filter="outil">outils</span></li> /
						<li><span class="filter" data-filter="com">communication</span></li> /
					</ul>
		<div id="portfoliolist">
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio connai" data-cat="=connai">
					<div class="portfolio-wrapper">				
							<a href ="http://codex.fcbn.fr"><img src="images/pic1.jpg" 
							title="Le Codex (pour Connaissance et Expertise) est un outil de partage de données dans le réseau. On y retrouve les travaux sur la liste rouge et la liste EEE nationale, le catalogue national, les évolutions proposé sur Taxref, et la Lettre Système d'Information et Géomatique" 
							alt="Le Codex" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Codex</p>
								<span class="text-category">codex.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio connai" data-cat="connai">
					<div class="portfolio-wrapper">			
							<a href ="http://siflore.fcbn.fr"><img src="images/pic2.jpg"  
							title="Le SI FLORE est une application cartographique permettant d'afficher les données agrégées du réseau des CBN sur les observations de taxons. Des fonctionnalités de recherches et de commentaires permettent la qualification de ces données." 
							alt="Le SI FLORE" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">SI Flore Veg</p>
								<span class="text-category">siflore.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio com" data-cat="com">
					<div class="portfolio-wrapper">						
							<a href ="http://www.fcbn.fr"><img src="images/pic3.jpg"  
							title="Le site internet est la vitrine de la FCBN sur internet. Il présente les différentes actions la FCBN, diffuse les actualités du réseau et met à disposition des ressources sur la flore et les végétations." 
							alt="Le Site internet" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Site internet</p>
								<span class="text-category">www.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>				
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio outil" data-cat="outil">
					<div class="portfolio-wrapper">			
							<a href ="http://filez.fcbn.fr"><img src="images/pic4.jpg"  
							title="FileZ est une application web développée par l’Université d’Avignon et des Pays de Vaucluse qui permet de déposer et gérer des fichiers lourds destinés à être partagés grâce à une URL unique. La FCBN met ce service à disposition du réseau pour partager les fichiers lourd."
							alt="FileZ" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">FileZ</p>
								<span class="text-category">filez.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">	
				<div class="portfolio ressource" data-cat="ressource">
					<div class="portfolio-wrapper">
							<a href ="http://extranet.fcbn.fr"><img src="images/pic5.jpg"  
							title = "L'Extranet est l'outil de partage documentaire lié au projets partagés aux seins du réseau."
							alt="Extranet" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Extranet</p>
								<span class="text-category">extranet.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>			
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio ressource" data-cat="ressource">
					<div class="portfolio-wrapper">			
							<a href ="http://photo.fcbn.fr"><img src="images/pic6.jpg"  
							title="Le photothèque du réseau a pour objet le partage des images dans le domaine de la flore et des végétations au sein du réseau des CBN"
							alt="Photothèque" /></a>
						<div class="label">
							<div class="label-text">
								<p class="text-title">Photothèque</p>
								<span class="text-category">photo.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio ressource" data-cat="ressource">
					<div class="portfolio-wrapper">			
							<a href ="http://doc.fcbn.fr"><img src="images/pic7.jpg"  
							title="PMB est une application de gestion de ressources documentaire. L'objectif de cet outil est de partager les ressources bibliographiques du réseau des CBN au niveau national"
							alt="Documentation (PMB)" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Documentation (PMB)</p>
								<span class="text-category">doc.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio connai" data-cat="connai">
					<div class="portfolio-wrapper">			
							<a href ="http://data.fcbn.fr"><img src="images/pic8.jpg"  
							title="Cette plateforme est un service permettant aux CBN de mettre à disposition leurs propres données et extraire les données issus de l'agrégation nationale."
							alt="Accès aux données SI FLORE" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Accès aux données SI Flore</p>
								<span class="text-category">data.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio connai" data-cat="connai">
					<div class="portfolio-wrapper">			
							<a href ="http://taxanalyst.fcbn.fr"><img src="images/pic9.jpg"  
							title="Taxa analyst est un simple outil de visualisation des données issus de TAXREF (suivi des différentes version), ainsi que des données issus des catalogues régionaux."
							alt="Taxa Analyst" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Taxa Analyst</p>
								<span class="text-category">taxanalyst.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a> 
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio ressource" data-cat="ressource">
					<div class="portfolio-wrapper">			
							<a href ="http://wiki.fcbn.fr"><img src="images/pic10.jpg"  
							title="Le wiki rassemble les ressources documentaires concernant les différents outils et services proposées par la FCBN."
							alt="Wiki" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Wiki FCBN</p>
								<span class="text-category">wiki.fcbn.fr</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a> 
		</div>
	</div><!-- end container -->
	</div>
</div>
</div>
</div>
</body>
</html>