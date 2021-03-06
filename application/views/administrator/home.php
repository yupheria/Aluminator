<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Alumniator</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/style.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                       <!-- <img src="http://placehold.it/150x50&text=Logo" alt="">-->
                        <?php echo anchor('home', 'WelTec Alumni ', array('class' => 'navbar-brand')); ?>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php include "header.php"; ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Heading Row -->
            <div class="row">
                <div class="col-md-8">
                    <!--<img class="img-responsive img-rounded" src="<?php echo base_url(); ?>webroot/images/ThreeStudentsWorkingTogether.jpg" alt="">-->
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
            
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Well -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Home</h3>
                    <div class="well text-center" style="height: 400px; text-align: left;">
                        Welcome to admin dashboard!
                        <br>
                        
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <!--<div class="row">
                <div class="col-md-4">
                    <h2>Heading 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
               
                <div class="col-md-4">
                    <h2>Heading 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
               
                <div class="col-md-4">
                    <h2>Heading 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
              
            </div>-->
            <!-- /.row -->

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Weltec Alumni 2015</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery Version 1.11.0 -->
        <script src="<?php echo base_url(); ?>webroot/js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>webroot/js/bootstrap.min.js"></script>

    </body>
</html>