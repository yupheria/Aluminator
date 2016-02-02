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
                <?php echo anchor('users/dashboard','WelTec Alumni',array('class'=>'navbar-brand')); ?>
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> <!--Last access : 30 May 2014 &nbsp;--> <?php $id =  $this->session->userdata('id');?>
<?php  echo anchor('','Home', array('class'=>'btn btn-danger square-btn-adjust')); ?>

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
                      <?php echo  anchor('users/profile','Profile' ); ?> 
                        
                    </li>
                    <li>
                          <?php echo  anchor('users/get_all_posts','All Posts'); ?> 
                    </li>
						   <li>
                        <?php echo  anchor('users/search_people','Search People'); ?> 
                    </li>	
                      <li>
                         <?php echo  anchor('users/get_friends','Friends', array('class'=>'active-menu')); ?>
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
                     <h2>Friend List And Requests</h2>   
                        <h5>Welcome <?php  echo $r->firstname .'&nbsp;'. $r->lastname;}?>. See what is going on...</h5>
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
                 <div class="panel-heading">Friend Requests</div>
                 <div class="panel-body">
                 <?php
				 $this->load->model('user_model');
				 $check_friend_request = $this->user_model->get_friend_request();
				 if($check_friend_request === FALSE){
					 echo 'Currently their are no friend requests';
				 }else{
					 
					 foreach($get_friends as $g_fr){
						 
						 echo anchor('users/view_profile/'.$g_fr->user_id.'',''.$g_fr->user_name). ' &nbsp Wants to be friend with you ' 
						 .anchor('users/request_action/'.$g_fr->id.'/accept','Accept') .'&nbsp; |'
						 .anchor('users/request_action/'.$g_fr->id.'/reject',' Reject');
					 }
				 }
				 ?>
                 
                 </div>
                 </div>
              </div>
              
              
              <div class="post_display">
                 <div class="panel panel-default">
                 <div class="panel-heading">Friend List</div>
                 <div class="panel-body">
                 <?php
				
					 $this->load->model('user_model');
					 $GFr1 = $this->user_model->get_my_friends_1();
					 if($GFr1){
					 foreach($get_my_friendsone as $flist){
						 
						 echo anchor('users/view_profile/'.$flist->friend_id.'',''.$flist->friend_name).'<br>';
					 }
					 }
				 
				 
				  $GFr2 = $this->user_model->get_my_friends_2();
				  if($GFr2){
				  foreach($get_my_friends2 as $flist1){
						 
						 echo anchor('users/view_profile/'.$flist1->user_id.'',''.$flist1->user_name).'<br>';
					 }
				  }
				 ?>
                 
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
