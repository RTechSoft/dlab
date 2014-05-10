<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
    body {
        margin-top: 60px;
    }
    </style>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iRescue</a>
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
                <ul class="nav navbar-nav navbar-right" style="padding-top:8px;">
                    <li>
                        <?php echo anchor('welcome/sign_up', 'Sign Up'); ?>
                    </li>
                    <li  style="padding-left:10px;">
                        <?php echo anchor('welcome/sign_in', 'Sign In'); ?>
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
                        <div class="panel panel-default">
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
                                                <input type="text" class="form-control" id="type" name="type" placeholder="i.e. Government, Non-government"value="<?php echo set_value('type'); ?>" />
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
                                        </div>
                                        <br>
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

</body>

</html>
