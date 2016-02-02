<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Chat Box</title>
 <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>webroot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>webroot/css/style.css" rel="stylesheet">


    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>webroot/js/jquery-1.11.0.js"></script>
        <!-- jQuery Version 1.11.0 -->

    <script src="<?php echo base_url();?>webroot/js/chat.js"></script>
      
</head>
<style>
ul li{
	list-style:none;
	border-bottom:1px dotted #DFDFDF;
	padding:5px;
}
</style>
<body>
<div id="sections" class="container">
<div class="col-lg-12">
<div class="col-lg-8">
<?php echo'hello <b>'. $this->session->userdata('name').'</b>'; ?>
</div>
<div class="col-lg-3 pull-right"> <?php $id =  $this->session->userdata('id');?>
 
 
<?php  echo anchor('','Home', array('class'=>'btn btn-danger square-btn-adjust')); ?>



<?php  echo anchor('login/logout/'.$id.'','Logout', array('class'=>'btn btn-danger square-btn-adjust')); ?>

</div>
</div>
</div>
</div>
</div>
 <br />
<div id="chat_viewport" class="container">
   
</div>
<div id="footer">
<?php $chatid = $this->uri->segment(3); ?>
    <div class="container">
        <p>
            <textarea id="chat_message" name="chat_message" class="form-control" rows="3"></textarea>
            <input id="chat_id" type="hidden" name="chat_id" value="<?php echo $chatid;?>">
            <input id="user_id" type="hidden" name="user_id" value="<?php echo $this->session->userdata('id'); ?>">
        </p>
        <p>
            <button type="submit" id="submit_message" class="btn btn-primary">Send</button>
        </p>
    </div>
</div>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>webroot/js/bootstrap.min.js"></script>
</body>
</html>