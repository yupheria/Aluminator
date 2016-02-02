<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | login</title>

    <!-- Bootstrap Core CSS -->
   <link href="<?php echo base_url();?>webroot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>webroot/css/style.css" rel="stylesheet">
       <link href="<?php echo base_url();?>webroot/css/log_reg.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>webroot/assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
               <?php echo anchor('home','WelTec Alumni',array('class'=>'navbar-brand')); ?>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<div class="container content">		
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                   <?php echo form_open('adminlogin/validation',array('class'=>'reg-page')); ?>
                    <div class="reg-header">            
                        <h2>Admin Area..!</h2>
                    </div>
                    <div id="error"><p><?php echo validation_errors(); ?></p></div>
                    <div id="error"><p><?php echo $this->session->flashdata('already_logged_in');?></p></div>
					 <p id="success"><?php echo $this->session->flashdata('Registration_successful');?></p>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        <input type="text" placeholder="Email" name="email" class="form-control">
                    </div>
                   
                                          
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>                    
     
      
                    <div class="row">
                       
                        <div class="col-md-6">
                            <button class="btn-u" type="submit">Login</button>                        
                        </div>
                    </div>

                 
                </form>            
            </div>
        </div><!--/row-->
    </div>
</body>
</html>
