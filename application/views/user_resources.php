<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <style>
    #banner
    {
        height: 150px;
    }
    </style>

</head>

<body>
    <div style="height: 150px; background: #000;">
        <div class="container"> 
            <div class="jumbotron" style="background: #000;">
                <h1 style="text-align:center; margin-top: -8px; color: #fff;"><b class="glyphicon glyphicon-screenshot"></b> iRescue</h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <a href="" style="padding: 0px;">
                            <button type="button" class="btn btn-default">Sign Out</button>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
        <div class="row">
        <nav class="navbar" role="navigation" style="border-radius:0px">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Profile</a>
                    </li>
                    <li style="background-color:#bdc3c7;"><a href="#">Resources</a>
                    </li>
                    <li><a href="#">Requests</a>
                    </li>
                    <li><a href="#">Tracker</a>
                    </li>
                    <li><a href="#">Updates</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </nav>
        <div class="col-lg-8">  
            <?php
                $resources = 0; //if there are no resources
                if ($resources == 0)
                {
                    echo '<h1>There are no resources listed.</h1><br><button id="add-res" type="button" class="btn btn-lg"><label>Add Resource</label></button>';
                }
            ?>
        </div>
        
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    $( "#add-res" ).click(function() {
     window.location.href="welcome/load_addres_form";
    });
    </script>
</body>

</html>
