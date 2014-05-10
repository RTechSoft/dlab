<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up | iRescue</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('welcome'); ?>">Home</a>
                    </li>
                    <li><a href="#organizations">Organizations</a>
                    </li>
                    <li><a href="#about">About</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="padding-top:8px;">
                    <li>
                        <a href="<?php echo site_url('welcome/sign_up'); ?>" style="padding: 0px;">
                            <button type="button" class="btn btn-default">Sign Up</button>
                        </a>
                    </li>
                    <li  style="padding-left:10px;">
                        <a href="<?php echo site_url('welcome/sign_in'); ?>" style="padding: 0px;">
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
        <div id="page-content-wrapper">
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h2 class="panel-title">Create Organization Profile</h2>
                            </div>
                            <div class="panel-body">
                                <div class="reg_form">
                                    <div class="form" role="form">
                                        <?php echo validation_errors('<p class="error">'); ?>
                                        <?php echo form_open_multipart("signup/registration"); ?>
                                        
                                        <h3>Account Information</h3><br>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" />
                                            </div>
                                            <div class="col-xs-4">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <h3>Organizational Information</h3><br>
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <label for="name">Organization Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" />
                                            </div>
                                            <div class="col-xs-3">
                                                <label for="type">Organization Type</label>
                                                <select name ="type" class="form-control" id="type">
                                                    <option value="Government">Government</option>
                                                    <option value="Non-Government">Non-Government</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="description">Description</label>
                                                <input type="text" class="form-control" id="description" name="description" value="<?php echo set_value('description'); ?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address'); ?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label for="hotline">Contact Number</label>
                                                <input type="text" class="form-control" id="hotline" name="hotline" placeholder="09*********" value="<?php echo set_value('hotline'); ?>" />
                                            </div>
                                            <div class="col-xs-4">
                                                <label for="email_address">E-mail Address</label>
                                                <input type="text" class="form-control" id="email_address" name="email_address" placeholder="organization@gmail.com" value="<?php echo set_value('email_address'); ?>" />
                                            </div>
                                            <div class="col-xs-4">
                                                <label for="website">Website URL</label>
                                                <input type="text" class="form-control" id="website" name="website" placeholder="www.organization.com"value="<?php echo set_value('website'); ?>" />
                                            </div>
                                            <label>Help us Map you by Clicking on your location!</label>
                                            <div class="mapDisplay">
                                                <div id ="map">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <input id="long" type="hidden" name="long" value="0">
                                        <input id="lat" type="hidden" name="lat" value="0">
                                        <input type="submit" class="btn btn-default" value="Submit" />
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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




map = L.map('map', {
    layers: mapLayer,
    center: [14.5942,120.982],
    zoom: 13
});
var newMarker = new L.marker([0,0]).addTo(map);
function addMarker(e){
    // Add marker to map at click location; add popup window
    map.removeLayer(newMarker);
    newMarker = new L.marker(e.latlng).addTo(map);
    map.addLayer(newMarker);
    var lng = document.getElementById("long");
    lng.value = e.latlng.lng;
    var lat = document.getElementById("lat");
    lat.value = e.latlng.lat;
}
map.on('click',  addMarker);
</script>
    <style>
        #map { width: 100%; height: 300px; }
    </style>
</body>

</html>
