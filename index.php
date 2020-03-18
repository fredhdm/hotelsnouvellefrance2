<?php $lng='fr'; ?>
<?php include('includes/parametres.php'); ?>
<?php include('includes/scripts/index.php'); ?>
<?php
$pageActuelle='index';


//*****Contenu dynamique de la page*****//
$pageTitre = sslashes($arrContenu[0]['titre']);
$pageMetaDescription = sslashes($arrContenu[0]['meta_description']);
$pageTexte = sslashes($arrContenu[0]['texte']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="UTF-8">
	<title><?php echo($pageTitre) ?></title>	
	<meta name="DESCRIPTION" content="<?php echo($pageMetaDescription) ?>" />
	<?php include('includes/head.html');?>
	
	
	
	
	</head>

	<body class="accueil">
	

	
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/entete.php'); ?>
							<div id="bloc_wrapper"> 
								<div id="bloc_ensemble">
								
										<h2>Promotions</h2>
								
											<?php foreach($arrBloc as $c) { ?>
											<div id="bloc">
												<div id="photo" style="background-image:url(/dynamique/blocs/<?php echo(sslashes(rawurlencode($c['blocNomFichier']))) ?>);">&nbsp;</div>
												<div id="information">
															<p><?php echo(sslashes($c['categorieBlocTitre'])) ?></p>
															<p><?php echo(sslashes($c['blocTitre'])) ?></p>
															<p><span>À partir de</span><span><?php echo(sslashes($c['aPartirBloc'])) ?></span></p>
													</div>
												<div id="boutons">
															<p id="bouton" style="<?php echo((empty($c['urlDetails']))?('display:none;'):('')) ?>"><span><a href="<?php echo(sslashes($c['urlDetails'])) ?>" title="Détails <?php echo(sslashes($c['blocTitre'])) ?>">Détails <i class="fa fa-chevron-right"></i></a></span></p>
															<!--p id="bouton" style="<?php echo((empty($c['urlBooking']))?('display:none;'):('')) ?>"><span><a href="<?php echo(sslashes($c['urlBooking'])) ?>" title="Réservez <?php echo(sslashes($c['blocTitre'])) ?>" target="_blank">Réservez <i class="fa fa-chevron-right"></i></a></span> </p-->
													</div>
										</div>
											<?php } ?>
									</div>
						</div>
							<div id="contenu">
								<div id="texte"><?php echo($pageTexte) ?>
</div>
								<div id="google_map"> <div style="height: 400px;/* position: relative; *//* z-index: 3000; */"><div id="map" ></div></div>
								 
    <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
        var map;
      function initMap() {
          
         map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 46.8085, lng: -71.2114107}
					
					
					
        });
				
			

       
				
		//var image2 = '';
		
		var icon2 = {
		url: "https://www.hotelsnouvellefrance.com/images/google-logos/logo-acadia.png", // url
		//scaledSize: new google.maps.Size(55,55), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(27,27) // anchor
};
		
		
        var beachMarker = new google.maps.Marker({
          position: {lat: 46.811246, lng: -71.2099541},
          map: map,
          icon: icon2
        });
		
		 var image3 = 'https://www.hotelsnouvellefrance.com/images/google-logos/logo-ermitage.png';
		 
		 var icon3 = {
		url: image3, // url
		//scaledSize: new google.maps.Size(55,55), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(27,27) // anchor
};
		 
		 
        var beachMarker = new google.maps.Marker({
          position: {lat: 46.810836, lng: -71.209828},
          map: map,
          icon: icon3
        });
		
		 var image4 = 'https://www.hotelsnouvellefrance.com/images/google-logos/logo-louisbourg.png';
		 
		 
		  var icon4 = {
		url: image4, // url
		//scaledSize: new google.maps.Size(55,55), // scaled size
		origin: new google.maps.Point(0,0), // origin
		anchor: new google.maps.Point(27,27) // anchor
};
		 
		 
        var beachMarker = new google.maps.Marker({
          position: {lat: 46.8109005, lng: -71.2090179},
          map: map,
          icon: icon4
        });
				
      }
			
			
			google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, "resize", function() {
 var center = map.getCenter();
 google.maps.event.trigger(map, "resize");
 map.setCenter(center); 
});
			
    </script>
   
    
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWoVJJdtK7ZZRvUb9dOKVrJPms1Cu8R-o&callback=initMap">
    </script>
								<div id="map"></div>
								
								
								
								
								
								
								
								</div>
						</div>
						
	<?php
		/*if(!$_SESSION['popup']) {
			$_SESSION['popup'] = true;
			
			$popup = '
				<div class="popup-overlay">
					<div class="popup-container">
						<div class="popup-content">
							<h5>Prenez note</h5>
							<p>Nous tenons à vous informer que notre système informatique est présentement indisponible. Nous vous invitons à nous appeler directement pour toute information ou réservation via le 1-418-694-0280. </p>
							<button class="close-popup">Fermer</button>
						</div>
					</div>
				</div>
				<style>
					.popup-overlay{position:fixed;z-index:4000;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);opacity:0;visibility:hidden;-webkit-transition:opacity 400ms ease,visibility 0ms ease 400ms;-ms-transition:opacity 400ms ease,visibility 0ms ease 400ms;transition:opacity 400ms ease,visibility 0ms ease 400ms}.popup-overlay.trigger{opacity:1;visibility:visible;-webkit-transition-delay:0ms;transition-delay:0ms}.popup-overlay.trigger .popup-container{-webkit-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}.popup-overlay .popup-container{position:relative;top:50%;left:50%;-webkit-transform:translate(-50%, -40%);-ms-transform:translate(-50%, -40%);transform:translate(-50%, -40%);-webkit-transition:transform 400ms ease;-ms-transition:transform 400ms ease;transition:transform 400ms ease;background:none;max-height:100%;max-width:100%;padding:20px;overflow:auto;display:inline-block}
					
					.popup-overlay .popup-content {
						background: #FFF;
						padding: 40px 20px;
						width: 600px;
						text-align: center;
					}
					.popup-overlay .popup-content p { font-size: 18px; line-height: 125%; margin-bottom: 0; } 
					.popup-overlay .popup-content h5 { 
						font-size: 26px; 
						text-transform: uppercase;
						font-weight: bold;
						margin-bottom: 15px;
					} 
					.popup-overlay .popup-content button { 
						font-size: 20px; 
						text-transform: uppercase;
						font-weight: bold;
						color: #FFF;
						margin-bottom: 15px;
						background: #558382;
						padding: 15px 50px;
						margin-top: 20px;
						border: none;
					} 
					
					@media screen and (max-width:620px) {
						.popup-overlay .popup-content { width: 100%; } 
					}
					
				</style>
				<script>
					$(document).ready(function() {
						setTimeout(function() { $(".popup-overlay").addClass("trigger"); },500);
						
						$(".popup-overlay").on("click",function(e) {
							if(e.target === this) {
								$(".popup-overlay").removeClass("trigger");
								return false;
							}
						});
						
						$(".close-popup").on("click",function(e) {
							$(".popup-overlay").removeClass("trigger");
							return false;
						});
					});
					
				</script>
			';
			
			echo $popup;
			
		}*/

	?>
						
						
					<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>

        
        <div class="popup-overlay promo"><div class="popup-container"><div class="popup-content"><div style="bakcground-image: url(/images/popup/hnf-surclassezvous_popup-fr.jpg);" class="popup-promo" data-popup="1"><button class="btn-close js-close-popup"><span class="icon icon-close"></span></button><a href="/fr/promotions/surclassez-vous" target="_self" rel="nofollow" title="Surclassez-vous" lang="fr"><img src="/images/popup/hnf-surclassezvous_popup-fr.jpg" alt="Surclassez-vous" title="Surclassez-vous"></a></div></div></div></div>
        
     
        
        
        <script>
					$(document).ready(function() {
						//setTimeout(function() { $(".popup-overlay").addClass("trigger"); },500);
						
						$(".popup-overlay").on("click",function(e) {
							if(e.target === this) {
								//$(".popup-overlay").removeClass("trigger");
								//return false;
							}
						});
						
						$(".js-close-popup").on("click",function(e) {
							//$(".popup-overlay").removeClass("trigger");
							//return false;
						});
					});
					
				</script>
        

</body>
</html>