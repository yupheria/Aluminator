<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumniator | Dashboard</title>
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
  /*Buttons
------------------------------------*/
.btn {
   box-shadow: none;
}

.btn-u {
   border: 0;
   color: #fff;
   font-size: 14px;
   cursor: pointer;
   font-weight: 400;
   padding: 6px 13px;
   position: relative;
   background: #72c02c;
   display: inline-block;
   text-decoration: none;
   margin-left:420px;
   margin-top:10px;
}
.btn-u:hover {
  color: #fff;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

a.btn-u {
   /*padding: 4px 13px;*/
   /*vertical-align: middle;*/
}

.btn-u-sm,
a.btn-u-sm {
   padding: 3px 12px;
}

.btn-u-lg,
a.btn-u-lg {
   font-size: 18px;
   padding: 10px 25px;
}

.btn-u-xs,
a.btn-u-xs {
   font-size: 12px;
   padding: 2px 12px;   
   line-height: 18px;
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
               <?php echo anchor('admin/dashboard','WelTec Alumni',array('class'=>'navbar-brand')); ?>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <!--Last access : 30 May 2014 &nbsp;-->   <?php $id =  $this->session->userdata('id');?>
<?php  echo anchor('adminlogin/logout/'.$id.'','Logout', array('class'=>'btn btn-danger square-btn-adjust')); ?>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                   
					</li>
				
					
                    <li>
                       
                        <?php echo  anchor('admin/dashboard','Dashboard'); ?> 
                    </li>
                     
                    <li>
                          <?php echo  anchor('admin/get_users','Get Users'); ?> 
                    </li>
						   <li>
                        <?php echo  anchor('admin/add_student_id','Add Student', array('class'=>'active-menu')); ?> 
                    </li>	
                    
					                   
                      
                  	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Welcome <?php foreach($rows as $r){ echo $r->firstname .'&nbsp;'. $r->lastname;}?>. How are you today.?</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                 <?php //print_r($this->session->all_userdata());?>
                 
                 <?php //echo $this->session->userdata('session_id') ?>
                 
                 <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                   <?php echo form_open('admin/validate_student_id',array('class'=>'reg-page')); ?>
                    <div class="reg-header">            
                        <h2>Add a new student id</h2>
                    </div>
                    <div id="error"><p><?php echo validation_errors(); ?></p></div>
                    <div id="error"><p><?php echo $this->session->flashdata('student_id_exist');?></p></div>
					 <p id="success"><?php echo $this->session->flashdata('sucessfully_added');?></p>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        <input type="text" placeholder="add student id" name="student_id" class="form-control">
                    </div>
                   
                                          
                          </div>              
     
      
                    <div class="row">
                       
                        <div class="col-md-6">
                            <button class="btn-u" type="submit">Add ID</button>    
                            <?php echo form_close();?>                    
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
