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

        <title>WelTec | Social</title>

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
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
                    <h2>Facebook</h2>
                    <div style="border:1px solid green;" class="fb-page" data-href="https://www.facebook.com/WelTec" data-height="600" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/WelTec"><a href="https://www.facebook.com/WelTec">WelTec</a></blockquote></div></div>
                </div>
				
				<div class="col-lg-4" >
                    <h2>Youtube</h2>
                    <div class="row">
                        <div ><iframe width="340" height="200" src="https://www.youtube.com/embed/IzaCUgMZudg" frameborder="0" allowfullscreen></iframe></div>
                        <div ><iframe width="340" height="200" src="https://www.youtube.com/embed/_g4qBdI8V1M" frameborder="0" allowfullscreen></iframe></div>
                        <div ><iframe width="340" height="200" src="https://www.youtube.com/embed/qWMybetDnT0" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                    
                   
                    
                </div>
				
				
				
				
				
				<div class="col-lg-4" >
                    <h2>Twitter</h2>
                    <a class="twitter-timeline" href="https://twitter.com/alwinfrancis7" data-widget-id="602759593203142658">Tweets by @alwinfrancis7</a>

                </div>

                


            </div>




        </div><!--/row-->
    </div>
</body>
</html>
