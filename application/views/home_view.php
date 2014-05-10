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

</head>

<body>
    <div class="container" style="height: 150px;"> 
        <div class="jumbotron">
            <h1 style="text-align:center; margin-top: -8px;"> iRescue</h1>
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
        <div>
            <img class="mapDisplay" src="images/Untitled.png">
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

</body>

</html>
