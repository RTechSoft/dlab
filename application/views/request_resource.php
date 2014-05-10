<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Resource Request | iRescue</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/otherStyles.css" rel="stylesheet">

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
                        <li><a href="<?php echo site_url('welcome'); ?>">Home</a>
                        </li>
                        <li><a href="#services">Organizations</a>
                        </li>
                        <li><a href="#contact">About</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-top:8px;">
                        <li>
                            <a href="<?php echo site_url('welcome/sign_up'); ?>" style="padding: 0px;">
                                <button type="button" class="btn btn-default">Sign Out</button>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container" style="padding-left: 180px; padding-right: 180px;">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Request for a resource</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="resType">Resource type</label></br>
                            <select id="resType" class="form-control">
                              <option value="ambulance">Ambulance</option>
                              <option value="medicine">Medicine</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" value="<?php echo set_value('quantity'); ?>" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="dateNeeded">Date needed</label>
                            <input type="date" id="dateNeeded" class="form-control" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="remarks">Remarks</label>
                            <textarea id="remarks" class="form-control" rows="4" style="max-width:100%;"></textarea>
                        </div>
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-danger" value="Request" />
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </body>
</html>