<?php ?>
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

        <title>Alumniator | Register</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>webroot/css/log_reg.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>webroot/assets/plugins/font-awesome/css/font-awesome.min.css">

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



        <div class="container content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

<?php echo form_open('register/validation', array('class' => 'reg-page')); ?>
                    <div class="reg-header">
                        <h2>Register a new account</h2>
                        <p>Already Signed Up? Click <?php echo anchor('login', 'Sign in', array('class' => 'color-green')); ?> to login your account.</p>                    
                    </div>

                    <label>First Name <span class="color-red">*</span></label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
                    <div id="error"><p><?php echo form_error('firstname'); ?></p></div>


                    <label>Last Name <span class="color-red">*</span></label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
                    <div id="error"><p><?php echo form_error('lastname'); ?></p></div>


                    <label>Student ID<span class="color-red">*</span></label>
                    <input type="text" name="studentid" class="form-control" placeholder="Enter Student ID" required>
                    <div id="error"><p><?php echo form_error('studentid'); ?></p></div>




                    <label>Email Address <span class="color-red">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address" required>
                    <div id="error"><p><?php echo form_error('email'); ?></p></div>


                    <label>Gender  <span class="color-red">*</span></label>
                    <select class="gender form-control" name="genderselect" required>
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    <div id="error"><p><?php echo form_error('genderselect'); ?></p></div>

					<label>Department  <span class="color-red">*</span></label>
                    <select class="gender form-control" name="departmentselect" required>
						<option value=""></option>
						<option value="1">Information Technology</option>
						<option value="2">Engineering</option>
						<option value="3">Hospitality</option>
						<option value="4">Tourism</option>
						<option value="5">Hairdressing, Beauty and Make-up Artistry</option>
						<option value="6">Construction</option>
						<option value="7">Exercise Science & Recreation</option>
                    </select>
                    <div id="error"><p><?php echo form_error('departmentselect'); ?></p></div>
					
					<label>Driver License  <span class="color-red">*</span></label>
                    <select class="gender form-control" name="licenseselect" required>
						<option value=""></option>
						<option value="Learners">Learners</option>
						<option value="Restricted">Restricted</option>
						<option value="Full license">Full license</option>
						<option value="Others">Others</option>
                    </select>
                    <div id="error"><p><?php echo form_error('licenseselect'); ?></p></div>
					
					
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password <span class="color-red">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            <div id="error"><p><?php echo form_error('password'); ?></p></div>
                        </div>
                        <div class="col-sm-6">

                            <label>Confirm Password <span class="color-red">*</span></label>
                            <input type="password" name="confirm_password" class="form-control margin-bottom-20" placeholder="Confirm Password" required>
                            <div id="error"><p><?php echo form_error('confirm_password'); ?></p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">

	<?php 
	if(isset($cap['image'])) {
	echo $cap['image']; 
	}
	?>                 
                        </div>
                        <div class="col-lg-6 text-right" style="padding-top:5px;">
                            <input type="text" name="captcha" class="form-control margin-bottom-20" placeholder="Enter Captcha">
                            <div id="error" style="text-align: left;"><p><?php echo form_error('captcha'); ?></p></div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-6">
                            <div id="error"><p><?php echo form_error('accept_terms'); ?></p></div>
                            <label class="checkbox">
                                <input type="checkbox" name="accept_terms"> 
                                I read <a href="page_terms" class="color-green">Terms and Conditions</a>
                            </label>                        
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit">Register</button>                        
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
