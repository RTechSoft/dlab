<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	 <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
	 <link rel="stylesheet" href="map.css" />
	 <script src="http://www.mapquestapi.com/sdk/leaflet/v1.0/mq-map.js?key=Fmjtd%7Cluur2qa729%2C7n%3Do5-9abx1z"></script>
</head>
<body>
 <div id="map" class="map"></div>
 
 <script type="text/javascript">
    var mapLayer = MQ.mapLayer(),
    map;
 	var hospitals = new L.layerGroup();
 	var firestations = new L.layerGroup();
 	var policestations = new L.layerGroup();
 	var schools = new L.layerGroup()
//hospitals
<?php
	foreach($hosp->result_array() as $row):
	
	if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
	echo "var hosp".$row['id']."=L.marker([".$row['lat'].",".$row['long']."]).bindPopup(\"".$row['name']."\").addTo(hospitals);\n";
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
	echo "var fire".$row['id']."=L.marker([".$row['lat'].",".$row['long']."]).bindPopup(\"".$row['name']."\").addTo(firestations);\n";
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
	echo "var police".$row['id']."=L.marker([".$row['lat'].",".$row['long']."]).bindPopup(\"".$row['name']."\").addTo(policestations);\n";
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
	echo "var school".$row['id']."=L.marker([".$row['lat'].",".$row['long']."]).bindPopup(\"".$row['name']."\").addTo(schools);\n";
?>
<?php
	endif;
	endforeach;
?>


map = L.map('map', {
    layers: mapLayer,
    center: [14.598181,120.992119],
    zoom: 12
});
L.control.layers({

},{
    'Hospitals':hospitals,
    'Firestations':firestations,
    'Police Stations':policestations,
    'Schools':schools

}).addTo(map);
</script>
 
<style>
    #map { width: 1360px; height: 700px; }
</style>
</body>
</html>