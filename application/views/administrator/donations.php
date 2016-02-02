<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Alumniator</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>webroot/css/style.css" rel="stylesheet">
        <!-- jQuery Version 1.11.0 -->
        <script src="<?php echo base_url(); ?>webroot/js/jquery-1.11.0.js"></script>
                <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
         <script>
            function deleterow(id) {
//                alert(id);
//                return false;
                if (confirm("Are you sure to delete ?")) {
                    var frm = document.form2;
                    frm.id.value = id;
                    frm.submit();
                }
            }
            $(function () {
                console.log("ready!");
                tinymce.init({selector: 'textarea'});
            });
            
        </script>
        <script></script>



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
            
            <!-- /.row -->


            <!-- Call to Action Well -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Donation Information</h2>
                    <div class="well text-center">
                        <div id="error"><p><?php echo $this->session->flashdata('status'); ?></p></div>
                        

                        <br><br>
                                                <?php echo form_open('administrator/donations', array('class' => 'reg-page', 'name' => 'form2'));?>
												<table border="1" style="width:100%">
                            <tr style="font-weight: bold;"><td style="padding: 15px;">S.No</td><td style="padding: 15px;">firstname</td><td style="padding: 15px;">lastname</td><td style="padding: 15px;">Email</td><td style="padding: 15px;">Amount</td><td style="padding: 15px;">Donation type</td><td style="padding: 15px;">Action</td></tr>
                            <?php
                            $query = mysql_query("SELECT * FROM `donate` ORDER BY `id` DESC");
                            $count = 1;
                            while ($fetch = mysql_fetch_array($query)) {
                                ?>
                                <tr><td style="padding: 15px;"><?php echo $count; ?></td><td style="padding: 15px;"><?php echo $fetch['firstname']; ?></td>
								<td style="padding: 15px;"><?php echo $fetch['lastname']; ?></td>
								<td style="padding: 15px;"><?php echo $fetch['email']; ?></td>
								<td style="padding: 15px;"><?php echo $fetch['amount']; ?></td>
								<td style="padding: 15px;"><?php echo $fetch['donationtype']; ?></td>
								
							 <td style="padding:15px;"><a href="#" onclick="return deleterow('<?php echo $fetch['id']; ?>');">Delete</a></td>
								</tr>
                                    
                                  
                                    
                                    
                                <?php
                                $count++;
                            }
                            ?>
                        </table>
												   
                        <input type="hidden" name="id" value="">
                     </form>
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



        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>webroot/js/bootstrap.min.js"></script>

    </body>
</html>