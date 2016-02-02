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

        <title>WelTec | login</title>

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

                <div class="col-lg-12">

                    <div class="col-lg-6">
                        <h1>Welcome to WelTec</h1>
                        <p>
                            <i>Kia ora, Talofa lava,
                                Malo e leilei, Kia Orana,
                                Bula vinaka, Fakaalofa atu,
                                Taloha, Konichiwa, Ni Hao</i>
                        </p>
                        <p>
                            Welcome to Wellington Institute of Technology
                            Te Whare Wananga o te Awakairangi</p>

                        <p>At WelTec our job is to ensure that the skills we teach are relevant for your success, in the future as well as today. We deliver practical, relevant qualifications designed to enhance your career and employment options.
                        </p>

                        <p>
                            You will find that we are future focused. Our teaching staff are specialists and researchers in their fields, and we are investing in exciting new technology to ensure that we remain at the leading edge of training and learning in New Zealand.
                        </p>
                        <p>
                            Our passion for the future is based on solid foundations. WelTec has had an important place within the wider Wellington region for over 100 years. We offer a comprehensive range of education to almost 11,000 students each year.
                        </p>

                        <p>
                            Our teaching is enhanced by the positive industry relationships we develop and enjoy. We work closely with employers so that we, and they, are confident that our graduates have the skills they need to succeed in the workplace.
                        </p>

                        <p>
                            WelTec's business, industry and professional partnerships are of enormous benefit to you. Students work on real projects and employers often recruit our graduates directly from WelTec. You will find that everyone who works at WelTec is committed to making it a supportive and friendly place to learn. You will find inspiration and support here, as well as an excellent education. Above all, you're a name, not a number, at WelTec. I look forward, with all the staff, to getting to know you.
                        </p>
                        <p>
                            Mr Chris Gosling
                            WelTec Chief Executive

                        </p>
                    </div>

                    <div class="col-lg-6">
                        <img src="<?php echo base_url(); ?>webroot/img/chris_gosling.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div><!--/row-->
    </div>
</body>
</html>
