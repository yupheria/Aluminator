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

        <title>WelTec | News</title>

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
        <style>
            .popular-links{
                margin-left: 0px;
            }
            .popular-links li{
                padding-bottom: 10px;

            }
        </style>
    </head>

    <body>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5320172528bcd29a" async="async"></script>

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
                <h2>News</h2>

                <div class="row">
                    <?php
                    if (isset($_REQUEST['id'])) {
                        $id = $_REQUEST['id'];
                        $query = mysql_query("select * from news where id =$id");
                    } else {
                        $query = mysql_query("select * from news order by id desc limit 0,1");
                    }
                    $fetch = mysql_fetch_array($query);
                    ?>
                    <div class="col-md-8" style="border:1px solid green;">

                        <h3><?php echo $fetch['title']; ?></h3>


                        <div class="row" style="padding-left: 10px; padding-right: 5px;">
                            <div class="col-md-6">Added on 02 May, 2015 </div> <div class="col-md-6" style="padding-bottom: 20px;">
                                <div class="addthis_sharing_toolbox"></div></div>
                                <?php
                                if($fetch['img_path']!=''){
                                    
                                ?>
                            <div style="text-align: center; padding: 30px;"> <img src="<?php echo base_url().'news/'.$fetch['img_path']; ?>" width="600"> </div>
                            <?php
                                }
                            ?>

                            <?php
                            echo $fetch['body'];
                            ?>
                        </div>

                    </div>
                    <div class="col-md-4"><h4 style="color:red;"> Popular News</h4>
                        <ul class="popular-links">
                            <?php
                            $sql = mysql_query("select * from news order by id desc");
                            while ($fetch = mysql_fetch_array($sql)) {
                                ?>
                                <li><a href="<?php echo base_url() . 'index.php/news/?id=' . $fetch['id']; ?>" style="font-weight: bold;"><?php echo substr($fetch['title'], 0, 30); ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>

                       
                    </div>
                </div>
            </div>




        </div><!--/row-->
    </div>
</body>
</html>
