<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In | iRescue</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

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

    <div class="container" style="padding-left: 250px; padding-right: 250px;">
        <div id="page-content-wrapper">
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h2 class="panel-title">Sign In</h2>
                            </div>
                            <div class="panel-body">
                                <div class="reg_form">
                                    <div class="form" role="form">
                                        <?php echo validation_errors('<p class="error">'); ?>
                                        <?php echo form_open_multipart("signin/sign_in"); ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="email_address">E-mail Address</label>
                                                <input type="text" class="form-control" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-default" value="Submit" style="width:100%"/>
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

</body>

</html>
