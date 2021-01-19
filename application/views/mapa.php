<!DOCTYPE html>
<html lang="es">

<head>
	<title><?= base_url(); ?>MySetup - Self Made - Web</title>
	<meta charset="UTF-8">
	<meta name="title" content="MySetup">
	<meta name="description" content="Self - Made - Web ">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="<?= base_url('static/web/mapa/')?>style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('static/web/mapa/')?>floating-wpp.min.css">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/static/images/favicon.ico');?>">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('static/web/mapa/')?>floating-wpp.min.js"></script>

</head>

<body>
<style>
	#map{
		width: 600px;
		height: 600px;
	}
	</style>
<div id ="map"> </div>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbYnx9_rlM5VLtKl-ivUc7-Z4BvYQ38aM&callback=initMap">
</script> 
<script>
	var map;
	 const myLatlng = { lat: -25.363, lng: -63 };
		function initMap(){
	 		map = new google.maps.Map(document.getElementById('map'), {
    	center: {
				lat: -26.3565949,
				lng: -63.9093815
    	},
			map:'map',
			zoom: 3.2,
			mapTypeId: 'roadmap'
		});
			
		var myCoordinates = [
new google.maps.LatLng(-38.920438,-71.439860),
new google.maps.LatLng(-38.577712,-70.912517),
new google.maps.LatLng(-35.990803,-70.648845),
new google.maps.LatLng(-33.828805,-70.121501),
new google.maps.LatLng(-31.235720,-70.385173),
new google.maps.LatLng(-28.105317,-69.682048),
new google.maps.LatLng(-26.307593,-68.275798),
new google.maps.LatLng(-24.721282,-68.363688),
new google.maps.LatLng(-23.195301,-67.133220),
new google.maps.LatLng(-22.547461,-67.133220),
new google.maps.LatLng(-22.059571,-66.430095),
new google.maps.LatLng(-21.733371,-65.639079),
new google.maps.LatLng(-22.466264,-64.848063),
new google.maps.LatLng(-22.871767,-64.408610),
new google.maps.LatLng(-22.059571,-63.881267),
new google.maps.LatLng(-21.978091,-62.914470),
new google.maps.LatLng(-22.871767,-61.684001),
new google.maps.LatLng(-23.920384,-60.101970),
new google.maps.LatLng(-24.641420,-58.959392),
new google.maps.LatLng(-25.119817,-57.816813),
new google.maps.LatLng(-26.622313,-58.519938),
new google.maps.LatLng(-27.170991,-58.519938),
new google.maps.LatLng(-27.327265,-57.113688),
new google.maps.LatLng(-27.405319,-56.234782),
new google.maps.LatLng(-27.014498,-55.531657),
new google.maps.LatLng(-26.070989,-54.652751),
new google.maps.LatLng(-25.833907,-54.176162),
new google.maps.LatLng(-25.833907,-54.000380),
new google.maps.LatLng(-26.779350,-53.912490),
new google.maps.LatLng(-27.405319,-54.439833),
new google.maps.LatLng(-28.337645,-55.318740),
new google.maps.LatLng(-29.415097,-57.076552),
new google.maps.LatLng(-31.385901,-58.043349),
new google.maps.LatLng(-32.504569,-58.219130),
new google.maps.LatLng(-33.242726,-58.307021),
new google.maps.LatLng(-33.901785,-58.570693),
new google.maps.LatLng(-34.700431,-58.219130),
new google.maps.LatLng(-34.844821,-57.955458),
new google.maps.LatLng(-35.491443,-57.340224),
new google.maps.LatLng(-36.487023,-57.164443),
new google.maps.LatLng(-37.609353,-57.164443),
new google.maps.LatLng(-38.920438,-59.273818),
new google.maps.LatLng(-39.057068,-61.383193),
new google.maps.LatLng(-39.057068,-62.262099),
new google.maps.LatLng(-40.742592,-61.910537),
new google.maps.LatLng(-41.074709,-64.547255),
new google.maps.LatLng(-43.480344,-65.074599),
new google.maps.LatLng(-46.645209,-66.920302),
new google.maps.LatLng(-49.406967,-67.359755),
new google.maps.LatLng(-51.967552,-68.414443),
new google.maps.LatLng(-51.422775,-60.416396),
new google.maps.LatLng(-51.913369,-57.779677),
new google.maps.LatLng(-51.477548,-72.105849),
new google.maps.LatLng(-48.015205,-72.896865),
new google.maps.LatLng(-38.988786,-71.402724)
];
var polyOptions = {
path: myCoordinates,
strokeColor: "#FF0000",
strokeOpacity: 1,
strokeWeight: 3
}
var it = new google.maps.Polyline(polyOptions);
it.setMap(map);	
			
			
//		var ctaLayer = new google.maps.KmlLayer({
//			url: 'https://mysetup.com.ar/static/web/mapa/data/gadm36_CHL_0.kml',
//			map: map
//		});	
	
			
//		let infoWindow = new google.maps.InfoWindow({
//    content: "Click the map to get Lat/Lng!",
//    position: myLatlng,
//  });
//  infoWindow.open(map);
//
//  // Configure the click listener.
//  map.addListener("click", (mapsMouseEvent) => {
//    // Close the current InfoWindow.
//    infoWindow.close();
//
//    // Create a new InfoWindow.
//    infoWindow = new google.maps.InfoWindow({
//      position: mapsMouseEvent.latLng,
//    });
//    infoWindow.setContent(
//      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
//    );
//    infoWindow.open(map);
//  });
};
	

	</script>
	<div class="container">
		<!-- Content here -->
		<header>

		</header>
		<nav>

		</nav>
		<section>
			<article>

				<div class=" align-self-center text-center">
					<img class="img-fluid" src="<?= base_url('static/web/mapa/')?>logo.png" alt="MySetup - Self-Made-Web">
				</div>
			</article>
		</section>

		<footer>
			<div class="text-center">
				<?php echo date('Y');?>
			</div>
		</footer>
	</div>
	<div id="myDiv"></div>
	<script type="text/javascript">
		
		$(function() {
			$('#myDiv').floatingWhatsApp({
				phone: '5491131181453',
				headerTitle: 'Contacto mediante Whatsapp!', //Popup Title
				popupMessage: 'Hola en que puedo ayudarte?', //Popup Message
				showPopup: true, //Enables popup display
				buttonImage: '<img src="<?= base_url('static/web/mapa/')?>whatsapp.svg" />', //Button Image
				//headerColor: 'crimson', //Custom header color
				//backgroundColor: 'crimson', //Custom background button color
				position: "right" //Position: left | right
			});
		});
	</script>
	


</body>

</html>
