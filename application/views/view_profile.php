<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumniator | Profile</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>webroot/css/bootstrap.min.css" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
     <link rel="stylesheet" href="<?php echo base_url();?>webroot/assets/plugins/font-awesome/css/font-awesome.min.css">
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>webroot/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>webroot/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
  <style>
  .image img{
	  height:150px;
	 
	  
  }

  </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Alumniator</a> 
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> <!--Last access : 30 May 2014 &nbsp;--> <?php $id =  $this->session->userdata('id');?>
<?php  echo anchor('login/logout/'.$id.'','Logout', array('class'=>'btn btn-danger square-btn-adjust')); ?> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url();?>webroot/images/user_images/<?php foreach($rows as $r){ echo $r->image;?>" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                       
                        <?php echo  anchor('users/dashboard','Dashboard'); ?> 
                    </li>
                     <li>
                      <?php echo  anchor('users/profile','Profile'  , array('class'=>'active-menu')); ?> 
                        
                    </li>
                    <li>
                          <?php echo  anchor('users/get_all_posts','All Posts'); ?> 
                    </li>
						   <li>
                        <?php echo  anchor('users/search_people','Search People'); ?> 
                    </li>	
                      <li>
                         <?php echo  anchor('users/get_friends','Friends'); ?>
                    </li>
                    				
					<li>
                        <?php echo  anchor('chat','Chat Online'); ?>
                    </li>
					                   
                      
                  	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>User Profile</h2>   
                        <h5>Welcome <?php  echo $r->firstname .'&nbsp;'. $r->lastname;?>. See what is going on...</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                 <!-- /. ROW  -->
                            
                 <?php //print_r($this->session->all_userdata());?>
                 
                 <?php //echo $this->session->userdata('session_id') ?>
                 
                 <div class="row">
                 <div class="col-lg-12">
                 
                
                 
                 <div class="post_display">
                 <div class="panel panel-default">
                 <div class="panel-heading">View Profile</div>
                 <div class="panel-body">
                 <div class="col-lg-6">
                 <?php
				  echo form_open('users/edit_profile',array('class'=>'reg-page'));
				 ?>
                  <p id="success" style="color:#008000;"><?php echo $this->session->flashdata('Updation_successful');?></p>
                    <p id="success" style="color:#008000;"><?php echo $this->session->flashdata('image_updated');?></p>
                 <?php
				 
				 echo 'Name:- '. $r->firstname.'&nbsp;'.$r->lastname.'<br/>';
				 echo 'Gender:- '.$r->gender.'<br/>';
				 echo 'Email:- '.$r->email.'<br/>';
				 echo 'About:- '. $r->about.'<br/>';
				 echo '</div>';
				 echo '<div class="col-lg-6  image"><img class=" img-responsive" src="'.base_url().'/webroot/images/user_images/'.$r->image.'"></div>';
					}
				 ?>
                   <?php echo  anchor('users/edit_image','Edit Profile Picture'); ?><br />
				   
				   <?php echo  anchor('upload_cv','Upload CV'); ?><br />
                 </div>
                  <button type="submit" class="btn btn-primary" style="margin-top:10px;">Edit Profile</button>
                    <?php echo form_close(); ?>                          
                 </div>
                 
                 </div>
                 </div>
              </div>
    </div>
             <!-- /. PAGE INNER  -->
      </div>
         <!-- /. PAGE WRAPPER  -->
</div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>webroot/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>webroot/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>webroot/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url();?>webroot/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>webroot/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>webroot/js/custom.js"></script>
    
   
</body>
</html>
