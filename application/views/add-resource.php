<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js" ></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <style>
    #banner
    {
        height: 150px;
    }
    </style>
</head>

<body>
    <div class="container" id="banner"> 
        <h1 style="text-align:center;"> iRescue</h1>
    </div>

    <nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

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
       
        <div class="row">
             <div class="container">
            <div class="col-lg-8">

                <div class="panel panel-default">
                    <div class="panel-heading"><label>ADD RESOURCE</label></div>
                    <div class="panel-body">
                      
                    <form method="post">

                    
                    <div class="row">
                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="type">Type</label>
                            <div class="btn-group">
                            <button id="select-market" type="button" class="btn btn-default dropdown-toggle" style="width:115px">
                            Select Type
                            </button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            
                            <ul class="dropdown-menu" role="menu" id="country-menu">
                            <li><a href="#">Ambulance</a></li>
                            <li><a href="#">Firetruck</a></li>
                            <li><a href="#">Truck</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Vietnam</a></li>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        <div class="form-group">
                        <label for="type">Quantity</label>
                            <input type="text" class="form-control" name="type" id="type" required>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group">
                        <label for="type">Remarks</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                        <button id="add-res" type="button" class="btn btn-default"><i class="fa fa-upload"></i> <label>Upload Pictures</label></button>
                        </div>
                
                        <div class="form-group">
                        <button id="add-res" type="button" class="btn btn-default"><label>Submit</label></button>
                        </div>
                    </div>
                    </div>
                    </form>
   
                </div>
               
               

        <div class="col-lg-6">

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
    <script>
    
    </script>
</body>

</html>
