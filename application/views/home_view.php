<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | iRescue</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/otherStyles.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
     <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
     <link rel="stylesheet" href="<?php echo base_url();?>map.css" />
     <script src="http://www.mapquestapi.com/sdk/leaflet/v1.0/mq-map.js?key=Fmjtd%7Cluur2qa729%2C7n%3Do5-9abx1z"></script>
     <script src="http://www.mapquestapi.com/sdk/leaflet/v1.0/mq-routing.js?key=Fmjtd%7Cluur2qa729%2C7n%3Do5-9abx1z"></script>
</head>

<body>
    <div style="height: 150px; background: #000;">
        <div class="container"> 
            <div class="jumbotron" style="background: #000;">
                <h1 style="text-align:center; margin-top: -8px; color: #fff;"><b class="glyphicon glyphicon-screenshot"></b> iRescue</h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Home</a>
                    </li>
                    <li><a href="#services">Organizations</a>
                    </li>
                    <li><a href="#contact">About</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="padding-top:8px;">
                    <li>
                        <a href="<?php echo site_url('welcome/sign_up'); ?>" style="padding: 0px;">
                            <button type="button" class="btn btn-default">Sign Up</button>
                        </a>
                    </li>
                    <li  style="padding-left:10px;">
                        <a href="<?php echo site_url('welcome/sign_up'); ?>" style="padding: 0px;">
                            <button type="button" class="btn btn-default">Sign In</button>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Put it here</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Public <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Private</a></li>
                            <li><a href="#">All</a></li>
                        </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Quantity">
                    </div>
                    <button type="submit" class="btn btn-default">Go</button>
                  </form>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="mapDisplay">
            <div id ="map">
            
            </div>
        </div>
        
        <div>
            <h3>Results</h3>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h5 class="panel-title">Organization Name</h5>
                </div>
                <div class="panel-body">
                    <ul style="list-style:none;">
                        <li>Contact number/s:</li>
                        <li>Address:</li>
                        <li>Number of available resources:</li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h5 class="panel-title">Organization Name</h5>
                </div>
                <div class="panel-body">
                    <ul style="list-style:none;">
                        <li>Contact number/s:</li>
                        <li>Address:</li>
                        <li>Number of available resources:</li>
                    </ul>
                </div>
            </div>
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">

 //layers
    var mapLayer = MQ.mapLayer(),
    map;
    var hospitals = new L.layerGroup();
    var firestations = new L.layerGroup();
    var policestations = new L.layerGroup();
    var schools = new L.layerGroup();
    var orgs  = new L.layerGroup();
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

//other organizations
<?php
    foreach($orgs->result_array() as $row):
    
    if($row['long']>120.959449 && $row['lat']>14.557898 && $row['long']<121.024790 && $row['lat']<14.638464):
?>
<?php
    echo "var org".$row['user_id']."=L.marker([".$row['lat'].",".$row['long']."]).bindPopup(\"<a href=\'#/\'>".$row['name']."\").addTo(orgs);\n";
?>
<?php
    endif;
    endforeach;
?>

var southWest = L.latLng(14.557898, 120.959449),
    northEast = L.latLng(14.638464, 121.024790),
    bounds = L.latLngBounds(southWest, northEast);
map = L.map('map', {
    layers: mapLayer,
    center: [14.5942,120.982],
    maxBounds:bounds,
    maxZoom:17,
    minZoom:12,
    zoom: 13
});
L.control.layers({

},{
    'Hospitals':hospitals,
    'Firestations':firestations,
    'Police Stations':policestations,
    'Schools':schools,
    'Private Organizations': orgs

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
    #map { width: 100%; height: 800px; }
</style>
</body>

</html>
