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
	#map,#map2{
		width: 600px;
		height: 600px;
	}
	</style>
<div id ="map"> </div>
<div id ="map2"></div>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=you_eky&callback=initMap">
</script> 
<script>
	var map;
	 const myLatlng = { lat: -25.363, lng: -63 };
	
	mapOptions = {
		    	center: {
				lat: -26.3565949,
				lng: -63.9093815
    	},
			map:'map',
			zoom: 3.2,
			mapTypeId: 'roadmap'
	};
	function initMap(){
	map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

	

//		function initMap(){
//	 		map = new google.maps.Map(document.getElementById('map'), {
//    	center: {
//				lat: -26.3565949,
//				lng: -63.9093815
//    	},
//			map:'map',
//			zoom: 3.2,
//			mapTypeId: 'roadmap'
//		});
//			
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

const bermudaTriangle = new google.maps.Polygon({
    paths: myCoordinates,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 3,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });
  bermudaTriangle.setMap(map);
//
//	
//	var paraguay = [
//new google.maps.LatLng(-22.158483,-62.675805),
//new google.maps.LatLng(-21.055357,-62.263817),
//new google.maps.LatLng(-20.562413,-62.274804),
//new google.maps.LatLng(-20.103987,-61.928734),
//new google.maps.LatLng(-19.618345,-61.730980),
//new google.maps.LatLng(-19.447503,-60.599389),
//new google.maps.LatLng(-19.292036,-59.995141),
//new google.maps.LatLng(-19.286851,-59.055809),
//new google.maps.LatLng(-19.830350,-58.187890),
//new google.maps.LatLng(-19.871684,-58.226342),
//new google.maps.LatLng(-19.907843,-58.204369),
//new google.maps.LatLng(-19.954320,-58.231835),
//new google.maps.LatLng(-19.974972,-58.198876),
//new google.maps.LatLng(-20.031752,-58.176903),
//new google.maps.LatLng(-20.062714,-58.143944),
//new google.maps.LatLng(-20.088511,-58.176903),
//new google.maps.LatLng(-20.103987,-58.154931),
//new google.maps.LatLng(-20.155563,-58.165917),
//new google.maps.LatLng(-20.186501,-58.138451),
//new google.maps.LatLng(-20.207122,-58.165917),
//new google.maps.LatLng(-20.238050,-58.165917),
//new google.maps.LatLng(-20.258664,-58.127465),
//new google.maps.LatLng(-20.243204,-58.099999),
//new google.maps.LatLng(-20.289581,-58.099999),
//new google.maps.LatLng(-20.330795,-58.089013),
//new google.maps.LatLng(-20.361697,-58.067040),
//new google.maps.LatLng(-20.392594,-58.039574),
//new google.maps.LatLng(-20.413188,-58.028588),
//new google.maps.LatLng(-20.449221,-58.006615),
//new google.maps.LatLng(-20.495537,-58.001122),
//new google.maps.LatLng(-20.496823,-58.017601),
//new google.maps.LatLng(-20.530265,-58.012108),
//new google.maps.LatLng(-20.561127,-57.998375),
//new google.maps.LatLng(-20.580413,-58.002495),
//new google.maps.LatLng(-20.602268,-58.012108),
//new google.maps.LatLng(-20.615122,-58.010735),
//new google.maps.LatLng(-20.627975,-57.999749),
//new google.maps.LatLng(-20.640827,-57.976403),
//new google.maps.LatLng(-20.647252,-57.975029),
//new google.maps.LatLng(-20.660103,-57.976403),
//new google.maps.LatLng(-20.683230,-57.981896),
//new google.maps.LatLng(-20.690939,-57.990136),
//new google.maps.LatLng(-20.699932,-57.969536),
//new google.maps.LatLng(-20.702501,-57.961297),
//new google.maps.LatLng(-20.685800,-57.947564),
//new google.maps.LatLng(-20.672952,-57.940697),
//new google.maps.LatLng(-20.660103,-57.935204),
//new google.maps.LatLng(-20.663957,-57.928338),
//new google.maps.LatLng(-20.663957,-57.920098),
//new google.maps.LatLng(-20.683230,-57.906365),
//new google.maps.LatLng(-20.697362,-57.894005),
//new google.maps.LatLng(-20.716631,-57.873406),
//new google.maps.LatLng(-20.738466,-57.866539),
//new google.maps.LatLng(-20.750024,-57.865166),
//new google.maps.LatLng(-20.747456,-57.885766),
//new google.maps.LatLng(-20.743603,-57.907738),
//new google.maps.LatLng(-20.741034,-57.924218),
//new google.maps.LatLng(-20.744887,-57.937951),
//new google.maps.LatLng(-20.755161,-57.948937),
//new google.maps.LatLng(-20.769286,-57.948937),
//new google.maps.LatLng(-20.776990,-57.955803),
//new google.maps.LatLng(-20.785978,-57.961297),
//new google.maps.LatLng(-20.794965,-57.961297),
//new google.maps.LatLng(-20.800100,-57.954430),
//new google.maps.LatLng(-20.798816,-57.935204),
//new google.maps.LatLng(-20.785978,-57.909111),
//new google.maps.LatLng(-20.785978,-57.899498),
//new google.maps.LatLng(-20.794965,-57.892632),
//new google.maps.LatLng(-20.800100,-57.885766),
//new google.maps.LatLng(-20.814221,-57.867913),
//new google.maps.LatLng(-20.846309,-57.859673),
//new google.maps.LatLng(-20.855293,-57.870659),
//new google.maps.LatLng(-20.871975,-57.904992),
//new google.maps.LatLng(-20.882240,-57.914605),
//new google.maps.LatLng(-20.887372,-57.920098),
//new google.maps.LatLng(-20.897636,-57.924218),
//new google.maps.LatLng(-20.906617,-57.925591),
//new google.maps.LatLng(-20.902768,-57.907738),
//new google.maps.LatLng(-20.904051,-57.885766),
//new google.maps.LatLng(-20.914314,-57.883019),
//new google.maps.LatLng(-20.929707,-57.878899),
//new google.maps.LatLng(-20.939968,-57.877526),
//new google.maps.LatLng(-20.946381,-57.869286),
//new google.maps.LatLng(-20.951511,-57.858300),
//new google.maps.LatLng(-20.945098,-57.844567),
//new google.maps.LatLng(-20.936120,-57.834954),
//new google.maps.LatLng(-20.936120,-57.825341),
//new google.maps.LatLng(-20.952793,-57.830834),
//new google.maps.LatLng(-20.964335,-57.822594),
//new google.maps.LatLng(-20.974594,-57.821221),
//new google.maps.LatLng(-20.979723,-57.828087),
//new google.maps.LatLng(-20.996391,-57.832207),
//new google.maps.LatLng(-21.013058,-57.844567),
//new google.maps.LatLng(-21.028441,-57.862420),
//new google.maps.LatLng(-21.047667,-57.863793),
//new google.maps.LatLng(-21.061764,-57.865166),
//new google.maps.LatLng(-21.075861,-57.859673),
//new google.maps.LatLng(-21.083549,-57.852807),
//new google.maps.LatLng(-21.089956,-57.851433),
//new google.maps.LatLng(-21.107893,-57.851433),
//new google.maps.LatLng(-21.128390,-57.862420),
//new google.maps.LatLng(-21.152726,-57.863793),
//new google.maps.LatLng(-21.164253,-57.858300),
//new google.maps.LatLng(-21.183462,-57.851433),
//new google.maps.LatLng(-21.202668,-57.850060),
//new google.maps.LatLng(-21.228272,-57.858300),
//new google.maps.LatLng(-21.239793,-57.872033),
//new google.maps.LatLng(-21.250032,-57.888512),
//new google.maps.LatLng(-21.265390,-57.907738),
//new google.maps.LatLng(-21.273069,-57.921471),
//new google.maps.LatLng(-21.288425,-57.922844),
//new google.maps.LatLng(-21.294823,-57.913231),
//new google.maps.LatLng(-21.301220,-57.899498),
//new google.maps.LatLng(-21.307617,-57.887139),
//new google.maps.LatLng(-21.317852,-57.854180),
//new google.maps.LatLng(-21.328087,-57.852807),
//new google.maps.LatLng(-21.335762,-57.861046),
//new google.maps.LatLng(-21.360064,-57.867913),
//new google.maps.LatLng(-21.371574,-57.884392),
//new google.maps.LatLng(-21.397149,-57.904992),
//new google.maps.LatLng(-21.420163,-57.907738),
//new google.maps.LatLng(-21.430390,-57.913231),
//new google.maps.LatLng(-21.448286,-57.926964),
//new google.maps.LatLng(-21.482793,-57.936577),
//new google.maps.LatLng(-21.493015,-57.943444),
//new google.maps.LatLng(-21.514736,-57.959923),
//new google.maps.LatLng(-21.519847,-57.962670),
//new google.maps.LatLng(-21.533899,-57.968163),
//new google.maps.LatLng(-21.559445,-57.968163),
//new google.maps.LatLng(-21.569663,-57.957177),
//new google.maps.LatLng(-21.572217,-57.942070),
//new google.maps.LatLng(-21.577325,-57.933831),
//new google.maps.LatLng(-21.584987,-57.914605),
//new google.maps.LatLng(-21.597757,-57.920098),
//new google.maps.LatLng(-21.604141,-57.921471),
//new google.maps.LatLng(-21.620739,-57.940697),
//new google.maps.LatLng(-21.634781,-57.940697),
//new google.maps.LatLng(-21.653928,-57.931084),
//new google.maps.LatLng(-21.663501,-57.924218),
//new google.maps.LatLng(-21.669244,-57.913231),
//new google.maps.LatLng(-21.674987,-57.900185),
//new google.maps.LatLng(-21.678177,-57.889885),
//new google.maps.LatLng(-21.682006,-57.884392),
//new google.maps.LatLng(-21.688386,-57.885766),
//new google.maps.LatLng(-21.695405,-57.886452),
//new google.maps.LatLng(-21.719647,-57.921471),
//new google.maps.LatLng(-21.737507,-57.945504),
//new google.maps.LatLng(-21.748349,-57.948937),
//new google.maps.LatLng(-21.752176,-57.943444),
//new google.maps.LatLng(-21.765568,-57.933144),
//new google.maps.LatLng(-21.767481,-57.924904),
//new google.maps.LatLng(-21.768756,-57.915978),
//new google.maps.LatLng(-21.770669,-57.911171),
//new google.maps.LatLng(-21.778321,-57.911171),
//new google.maps.LatLng(-21.794261,-57.920098),
//new google.maps.LatLng(-21.804462,-57.922158),
//new google.maps.LatLng(-21.823586,-57.932457),
//new google.maps.LatLng(-21.839521,-57.952370),
//new google.maps.LatLng(-21.838884,-57.959923),
//new google.maps.LatLng(-21.842708,-57.963356),
//new google.maps.LatLng(-21.848444,-57.966103),
//new google.maps.LatLng(-21.852905,-57.961983),
//new google.maps.LatLng(-21.855455,-57.952370),
//new google.maps.LatLng(-21.859916,-57.944817),
//new google.maps.LatLng(-21.865014,-57.934517),
//new google.maps.LatLng(-21.871386,-57.921471),
//new google.maps.LatLng(-21.878395,-57.912545),
//new google.maps.LatLng(-21.884767,-57.913918),
//new google.maps.LatLng(-21.891139,-57.922158),
//new google.maps.LatLng(-21.887953,-57.928338),
//new google.maps.LatLng(-21.888590,-57.937951),
//new google.maps.LatLng(-21.893687,-57.939324),
//new google.maps.LatLng(-21.896873,-57.943444),
//new google.maps.LatLng(-21.900058,-57.948250),
//new google.maps.LatLng(-21.910251,-57.948250),
//new google.maps.LatLng(-21.913437,-57.946190),
//new google.maps.LatLng(-21.912800,-57.941384),
//new google.maps.LatLng(-21.929999,-57.936577),
//new google.maps.LatLng(-21.938279,-57.943444),
//new google.maps.LatLng(-21.952290,-57.953743),
//new google.maps.LatLng(-21.970121,-57.959923),
//new google.maps.LatLng(-21.979673,-57.964730),
//new google.maps.LatLng(-21.997500,-57.962670),
//new google.maps.LatLng(-22.009596,-57.964730),
//new google.maps.LatLng(-22.019782,-57.979149),
//new google.maps.LatLng(-22.022328,-57.993569),
//new google.maps.LatLng(-22.031239,-58.003869),
//new google.maps.LatLng(-22.038877,-58.007988),
//new google.maps.LatLng(-22.047787,-58.007302),
//new google.maps.LatLng(-22.050333,-57.999749),
//new google.maps.LatLng(-22.055424,-57.993569),
//new google.maps.LatLng(-22.061788,-57.986016),
//new google.maps.LatLng(-22.072606,-57.986702),
//new google.maps.LatLng(-22.080878,-57.992882),
//new google.maps.LatLng(-22.083423,-57.997002),
//new google.maps.LatLng(-22.096784,-57.997689),
//new google.maps.LatLng(-22.112688,-57.977776),
//new google.maps.LatLng(-22.121594,-57.966103),
//new google.maps.LatLng(-22.140676,-57.955803),
//new google.maps.LatLng(-22.154667,-57.964043),
//new google.maps.LatLng(-22.172473,-57.970223),
//new google.maps.LatLng(-22.192183,-57.974343),
//new google.maps.LatLng(-22.214434,-57.980523),
//new google.maps.LatLng(-22.031102,-57.869286),
//new google.maps.LatLng(-22.112551,-57.605614),
//new google.maps.LatLng(-22.193954,-57.341942),
//new google.maps.LatLng(-22.275309,-56.902489),
//new google.maps.LatLng(-22.234637,-56.506981),
//new google.maps.LatLng(-22.071832,-56.550927),
//new google.maps.LatLng(-22.275309,-56.155419),
//new google.maps.LatLng(-22.397253,-55.628075),
//new google.maps.LatLng(-22.681373,-55.715966),
//new google.maps.LatLng(-23.005362,-55.540184),
//new google.maps.LatLng(-23.489887,-55.496239),
//new google.maps.LatLng(-23.771710,-55.628075),
//new google.maps.LatLng(-23.852119,-55.232567),
//new google.maps.LatLng(-23.892304,-55.012841),
//new google.maps.LatLng(-23.811920,-54.749169),
//new google.maps.LatLng(-24.052923,-54.441552),
//new google.maps.LatLng(-24.413578,-54.309716),
//new google.maps.LatLng(-24.693378,-54.529442),
//new google.maps.LatLng(-25.251093,-54.617333),
//new google.maps.LatLng(-25.608280,-54.397606),
//new google.maps.LatLng(-25.687511,-54.529442),
//new google.maps.LatLng(-26.280056,-54.397606),
//new google.maps.LatLng(-26.634140,-54.968895),
//new google.maps.LatLng(-26.987131,-55.232567),
//new google.maps.LatLng(-27.339018,-55.540184),
//new google.maps.LatLng(-27.260917,-55.891747),
//new google.maps.LatLng(-27.260917,-56.331200),
//new google.maps.LatLng(-27.339018,-57.166161),
//new google.maps.LatLng(-27.143662,-57.649559),
//new google.maps.LatLng(-27.065424,-57.869286),
//new google.maps.LatLng(-27.026284,-58.352684),
//new google.maps.LatLng(-27.182761,-58.704247),
//new google.maps.LatLng(-26.673416,-58.264794),
//new google.maps.LatLng(-26.240646,-58.264794),
//new google.maps.LatLng(-26.003907,-58.089013),
//new google.maps.LatLng(-25.806259,-57.869286),
//new google.maps.LatLng(-25.290833,-57.517724),
//new google.maps.LatLng(-25.052200,-57.693505),
//new google.maps.LatLng(-25.012382,-57.913231),
//new google.maps.LatLng(-24.972552,-58.132958),
//new google.maps.LatLng(-24.693378,-58.836083),
//new google.maps.LatLng(-24.653445,-59.187645),
//new google.maps.LatLng(-24.493585,-59.451317),
//new google.maps.LatLng(-24.213340,-59.627099),
//new google.maps.LatLng(-24.012787,-59.934716),
//new google.maps.LatLng(-24.012787,-60.330224),
//new google.maps.LatLng(-23.811920,-60.725731),
//new google.maps.LatLng(-23.771710,-60.945458),
//new google.maps.LatLng(-23.489887,-61.165184),
//new google.maps.LatLng(-23.247845,-61.472802),
//new google.maps.LatLng(-23.045806,-61.692528),
//new google.maps.LatLng(-22.964905,-62.044091),
//new google.maps.LatLng(-22.600256,-62.131981),
//new google.maps.LatLng(-22.275309,-62.527489),
//new google.maps.LatLng(-22.253906,-62.551792),
//new google.maps.LatLng(-22.279323,-62.579258),
//new google.maps.LatLng(-22.238653,-62.661656),
//new google.maps.LatLng(-22.187798,-62.683628),
//new google.maps.LatLng(-22.167451,-62.694615),
//new google.maps.LatLng(-22.157276,-62.689122)
//];
//var polyOptions = {
//path: paraguay,
//strokeColor: "#FF0000",
//strokeOpacity: 1,
//strokeWeight: 3
//}
//const it = new google.maps.Polyline(paraguay);
//it.setMap(map);
}
//			
//var myCoordinates = [
//new google.maps.LatLng(-34.152237,-58.345305),
//new google.maps.LatLng(-33.146254,-58.455168),
//new google.maps.LatLng(-33.017379,-58.235442),
//new google.maps.LatLng(-32.888316,-58.169524),
//new google.maps.LatLng(-32.574093,-58.213469),
//new google.maps.LatLng(-32.333058,-58.191496),
//new google.maps.LatLng(-32.184410,-58.037688),
//new google.maps.LatLng(-32.109994,-58.147551),
//new google.maps.LatLng(-31.774374,-58.191496),
//new google.maps.LatLng(-31.737007,-58.081633),
//new google.maps.LatLng(-31.531221,-58.037688),
//new google.maps.LatLng(-31.362513,-58.125578),
//new google.maps.LatLng(-31.174703,-58.015715),
//new google.maps.LatLng(-31.061838,-57.971770),
//new google.maps.LatLng(-30.892289,-57.905852),
//new google.maps.LatLng(-30.703549,-57.795989),
//new google.maps.LatLng(-30.419745,-57.905852),
//new google.maps.LatLng(-30.287020,-57.752043),
//new google.maps.LatLng(-30.268045,-57.268645),
//new google.maps.LatLng(-30.230083,-57.202727),
//new google.maps.LatLng(-30.116109,-57.158782),
//new google.maps.LatLng(-30.116109,-56.785246),
//new google.maps.LatLng(-30.249066,-56.543547),
//new google.maps.LatLng(-30.343924,-56.543547),
//new google.maps.LatLng(-30.476572,-56.367766),
//new google.maps.LatLng(-30.590127,-56.301848),
//new google.maps.LatLng(-30.741327,-56.038176),
//new google.maps.LatLng(-30.873432,-56.038176),
//new google.maps.LatLng(-31.080658,-55.884368),
//new google.maps.LatLng(-30.911143,-55.730559),
//new google.maps.LatLng(-30.929993,-55.598723),
//new google.maps.LatLng(-31.043014,-55.422942),
//new google.maps.LatLng(-31.306209,-55.159270),
//new google.maps.LatLng(-31.306209,-55.049407),
//new google.maps.LatLng(-31.493757,-54.873625),
//new google.maps.LatLng(-31.493757,-54.609953),
//new google.maps.LatLng(-31.624817,-54.522063),
//new google.maps.LatLng(-31.737007,-54.412200),
//new google.maps.LatLng(-31.793052,-54.324309),
//new google.maps.LatLng(-31.849062,-54.258391),
//new google.maps.LatLng(-31.867725,-54.148528),
//new google.maps.LatLng(-31.905039,-53.972746),
//new google.maps.LatLng(-31.998257,-53.906828),
//new google.maps.LatLng(-32.091381,-53.818938),
//new google.maps.LatLng(-32.165812,-53.709075),
//new google.maps.LatLng(-32.333058,-53.643157),
//new google.maps.LatLng(-32.499997,-53.577239),
//new google.maps.LatLng(-32.629624,-53.423430),
//new google.maps.LatLng(-32.648127,-53.313567),
//new google.maps.LatLng(-32.722100,-53.203703),
//new google.maps.LatLng(-32.814481,-53.225676),
//new google.maps.LatLng(-32.980523,-53.269621),
//new google.maps.LatLng(-33.091045,-53.489348),
//new google.maps.LatLng(-33.183041,-53.511321),
//new google.maps.LatLng(-33.623275,-53.379485),
//new google.maps.LatLng(-33.714709,-53.379485),
//new google.maps.LatLng(-33.897285,-53.445403),
//new google.maps.LatLng(-34.079472,-53.577239),
//new google.maps.LatLng(-34.358335,-53.741077),
//new google.maps.LatLng(-34.448980,-53.828968),
//new google.maps.LatLng(-34.539528,-54.070667),
//new google.maps.LatLng(-34.648055,-54.224476),
//new google.maps.LatLng(-34.972784,-54.883655),
//new google.maps.LatLng(-34.882710,-55.147327),
//new google.maps.LatLng(-34.846652,-55.323108),
//new google.maps.LatLng(-34.702265,-55.674671),
//new google.maps.LatLng(-34.864683,-56.004261),
//new google.maps.LatLng(-34.918751,-56.136097),
//new google.maps.LatLng(-34.864683,-56.289905),
//new google.maps.LatLng(-34.774490,-56.377796),
//new google.maps.LatLng(-34.666129,-56.531604),
//new google.maps.LatLng(-34.648055,-56.619495),
//new google.maps.LatLng(-34.629977,-56.795276),
//new google.maps.LatLng(-34.648055,-56.949085),
//new google.maps.LatLng(-34.448980,-56.993030),
//new google.maps.LatLng(-34.430859,-57.190784),
//new google.maps.LatLng(-34.394605,-57.366565),
//new google.maps.LatLng(-34.376472,-57.476429),
//new google.maps.LatLng(-34.322049,-57.784046),
//new google.maps.LatLng(-34.340194,-57.981800),
//new google.maps.LatLng(-34.285747,-58.025745),
//new google.maps.LatLng(-34.194925,-58.179554),
//new google.maps.LatLng(-34.067609,-58.179554),
//new google.maps.LatLng(-34.085809,-58.223499),
//new google.maps.LatLng(-34.063059,-58.256458),
//new google.maps.LatLng(-34.058508,-58.289417),
//new google.maps.LatLng(-34.099456,-58.316883),
//new google.maps.LatLng(-34.135838,-58.333362),
//new google.maps.LatLng(-34.158569,-58.344349),
//new google.maps.LatLng(-34.144931,-58.355335),
//new google.maps.LatLng(-34.147479,-58.351375),
//new google.maps.LatLng(-34.150178,-58.347942),
//new google.maps.LatLng(-34.152025,-58.345882),
//new google.maps.LatLng(-34.152451,-58.345367)
//];
//var polyOptions = {
//path: myCoordinates,
//strokeColor: "#FF0000",
//strokeOpacity: 1,
//strokeWeight: 3
//}
//const uruguay = new google.maps.Polygon({
//    paths: myCoordinates,
//    strokeColor: "#FF0000",
//    strokeOpacity: 0.8,
//    strokeWeight: 3,
//    fillColor: "#FF0000",
//    fillOpacity: 0.35,
//  });
//  uruguay.setMap(map);
//
//
//
//			
//			let infoWindow = new google.maps.InfoWindow({
//    content: "Click the map to get Lat/Lng!",
//    position: myLatlng,
//  });
//			
//		map.addListener("click", (mapsMouseEvent) => {
//			alert();
//    // Close the current InfoWindow.
//    infoWindow.close();
//    // Create a new InfoWindow.
//    infoWindow = new google.maps.InfoWindow({
//      position: mapsMouseEvent.latLng,
//    });
//    infoWindow.setContent(
//      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
//    );
//    infoWindow.open(map);
//  })
//			
////var it = new google.maps.Polyline(polyOptions);
////it.setMap(map);	
//
//	
//			
////		let infoWindow = new google.maps.InfoWindow({
////    content: "Click the map to get Lat/Lng!",
////    position: myLatlng,
////  });
////  infoWindow.open(map);
////
////  // Configure the click listener.
////  map.addListener("click", (mapsMouseEvent) => {
////    // Close the current InfoWindow.
////    infoWindow.close();
////
////    // Create a new InfoWindow.
////    infoWindow = new google.maps.InfoWindow({
////      position: mapsMouseEvent.latLng,
////    });
////    infoWindow.setContent(
////      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
////    );
////    infoWindow.open(map);
////  });
//};

	
	function initialize()
    {

                map2 = new google.maps.Map(document.getElementById('map2'), {
                    zoom: 7,
										center: {
											lat: -26.3565949,
											lng: -63.9093815
										},
                  });

                var polyOptions2 = {
                    strokeColor: '#000000',
                    strokeOpacity: 1.0,
                    strokeWeight: 3
                };
                var polyOptions22 = {
                    strokeColor: '#999FFF',
                    strokeOpacity: 1.0,
                    strokeWeight: 3
                };

                var polyline = new google.maps.Polyline(polyOptions2);
                var polyline2= new google.maps.Polyline(polyOptions22);
                polyline.setMap(map2);
                polyline2.setMap(map2);
                google.maps.event.addListener(map2, 'click', addLatLng);
    }
	</script>
	<div class="container">
		<!-- Content here -->
		<header>

		</header>
		<nav>

		</nav>
		<section spellcheck="display:none">
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
