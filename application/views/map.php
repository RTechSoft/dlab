<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	 <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
	 <link rel="stylesheet" href="<?php echo base_url();?>map.css" />
	 <script src="http://www.mapquestapi.com/sdk/leaflet/v1.0/mq-map.js?key=Fmjtd%7Cluur2qa729%2C7n%3Do5-9abx1z"></script>
	 <script src="http://www.mapquestapi.com/sdk/leaflet/v1.0/mq-routing.js?key=Fmjtd%7Cluur2qa729%2C7n%3Do5-9abx1z"></script>
</head>
<body>
 <div id="map" class="map"></div>
 
 <script type="text/javascript">

 //layers
    var mapLayer = MQ.mapLayer(),
    map;
 	var hospitals = new L.layerGroup();
 	var firestations = new L.layerGroup();
 	var policestations = new L.layerGroup();
 	var schools = new L.layerGroup()

 //icons
var hospIcon = L.icon({
    iconUrl: '<?php echo base_url();?>images/hospital.png',
    iconSize: [20, 20],
    iconAnchor: [13, 75],
    popupAnchor: [-3, -76],
    shadowSize: [20, 20],
    shadowAnchor:[20, 20]
});
var policeIcon = L.icon({
    iconUrl: '<?php echo base_url();?>images/police.png',
    iconSize: [20, 20],
    iconAnchor: [13, 75],
    popupAnchor: [-3, -76],
    shadowSize: [20, 20],
    shadowAnchor:[20, 20]
});

var fireIcon = L.icon({
    iconUrl: '<?php echo base_url();?>images/fire.png',
    iconSize: [20, 20],
    iconAnchor: [13, 75],
    popupAnchor: [-3, -76],
    shadowSize: [20, 20],
    shadowAnchor:[20, 20]
});

var schoolIcon = L.icon({
    iconUrl: '<?php echo base_url();?>images/school.png',
    iconSize: [20, 20],
    iconAnchor: [13, 75],
    popupAnchor: [-3, -76],
    shadowSize: [20, 20],
    shadowAnchor:[20, 20]
});
//end of icons



//hospitals
<?php
	foreach($hosp->result_array() as $row):
	
	if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
	echo "var hosp".$row['id']."=L.marker([".$row['lat'].",".$row['long']."],{icon: hospIcon}).bindPopup(\"".$row['name']."\").on('click',onClick).addTo(hospitals);\n";
?>
<?php
	endif;
	endforeach;
?>

//firestations
<?php
	foreach($fire->result_array() as $row):
	
	if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
	echo "var fire".$row['id']."=L.marker([".$row['lat'].",".$row['long']."],{icon: fireIcon}).bindPopup(\"".$row['name']."\").addTo(firestations);\n";
?>
<?php
	endif;
	endforeach;
?>

//police stations
<?php
	foreach($police->result_array() as $row):
	
	if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
	echo "var police".$row['id']."=L.marker([".$row['lat'].",".$row['long']."],{icon: policeIcon}).bindPopup(\"".$row['name']."\").addTo(policestations);\n";
?>
<?php
	endif;
	endforeach;
?>

//schools

<?php
	foreach($schools->result_array() as $row):
	
	if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
	echo "var school".$row['id']."=L.marker([".$row['lat'].",".$row['long']."],{icon: schoolIcon}).bindPopup(\"<a href=\'#/\'>".$row['name']."\").addTo(schools);\n";
?>
<?php
	endif;
	endforeach;
?>


map = L.map('map', {
    layers: mapLayer,
    center: [14.5942,120.982],
    zoom: 13
});
L.control.layers({

},{
    'Hospitals':hospitals,
    'Firestations':firestations,
    'Police Stations':policestations,
    'Schools':schools

}).addTo(map);



/*
	routing using Mapquest routing API
*/
dir = MQ.routing.directions();
 
dir.route({
    locations: [
         { latLng: { lat: 14.5883, lng: 120.982}},
     { latLng: { lat: 14.6268, lng: 120.974}}
    ]
});
 
map.addLayer(MQ.routing.routeLayer({
    directions: dir,
    fitBounds: true
}));

//click function
function onClick(e) {alert(this.getLatLng().lat);}

</script>
 
<style>
    #map { width: 1000px; height: 800px; }
</style>
</body>
</html>