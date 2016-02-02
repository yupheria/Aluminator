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

        <title>WelTec | Suitable Applicants</title>

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
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
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



                <div class="col-lg-4" >
                    <h2>Suitable Applicants</h2>
                   <table border="1px solid black">
                         <tr style="font-weight: bold;">
							<td style="padding: 10px;">First Name</td>
							<td style="padding: 10px;">Last Name</td>
							<td style="padding: 10px;">Email</td>
							<td style="padding: 10px;">Gender</td>
							<td style="padding: 10px;">Driver's License</td>
							<td style="padding: 10px;">Department</td></tr>
                            <?php
                            $query = mysql_query("select users.*, departments.name from users left join departments on departments.id = users.department where users.department = ".$this->uri->segment(3));
                            $count = 1;
                            while ($fetch = mysql_fetch_array($query)) {
                                ?>
									<tr>
									<td style="padding: 10px;"><?php echo $fetch['firstname']; ?></td>
									<td style="padding: 10px;"><?php echo $fetch['lastname']; ?></td>
									<td style="padding: 10px;"><?php echo $fetch['email']; ?></td>
									<td style="padding: 10px;"><?php echo $fetch['gender']; ?></td>
									<td style="padding: 10px;"><?php echo $fetch['driverlicense']; ?></td>
									<td style="padding: 10px;"><?php echo $fetch['name']; ?></td>	
                                    
                                    
									</tr>
									
										
                                <?php $count++;

                            }
                            ?>
                        </table>



                </div>


            </div>




        </div><!--/row-->
    </div>
</body>
</html>
