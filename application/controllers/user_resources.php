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
        <div class="col-lg-8">  
            <?php

               echo $listRes;

               foreach ($listRes as $row){
                if ($row['quantity']== 0)
                {
                    echo '<h1>There are no resources listed.</h1><br><a href="resourcecontroller/load_addres_form"><input type="submit" class="btn btn-lg" value="Add Resource" /></input></a>';
                }
                else
                {
                    while ($i < $count_resources)
                    {
                        echo '<h1>There are no resources listed.</h1><br><a href="resourcecontroller/load_addres_form"><input type="submit" class="btn btn-lg" value="Add Resource" /></input></a>';
                        $i = $i + 1;
                    }
                }
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
    
</body>

</html>
