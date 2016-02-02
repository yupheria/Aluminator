<style>



.menu_simple {
    width: 100%;
    background-color: #005555;
}

.menu_simple ul {
    margin: 0; padding: 0;
    float: left;
}

.menu_simple ul li {
    display: inline;
}

.menu_simple ul li a {
    float: left; text-decoration: none;
    color: white; 
    padding: 10.5px 11px;
    background-color:  #2BA1F5;
}

.menu_simple ul li a:hover {
    background-color: rgb(11, 67, 107);
}
 
.menu_simple ul li a:visited {
    color: white;
}
 

</style>
<div class="menu_simple">
<ul class=" pull-right">
    <li>
        <?php echo anchor('', 'Home'); ?>
    </li>
    <li>
        <?php echo anchor('home/about', 'About'); ?>
    </li>
    <li>
        <?php 
		if($this->session->userdata('name')==null) {
			echo anchor('login', 'Login');
		}	
		?>
    </li>
    <li>
        <?php 
		if($this->session->userdata('name')==null) {
			echo anchor('register', 'Register'); 
		}
		?>
    </li>

	
    <li>
        <?php echo anchor('social', 'Social'); ?>
    </li>
    <li>
        <?php echo anchor('gallery', 'Gallery'); ?>
    </li>
    <li>
        <?php echo anchor('news', 'News'); ?>
    </li>
	<li>
        <?php echo anchor('job_opportunities', 'Job Opportunities'); ?>
    </li>
    <li>
        <?php echo anchor('donate', 'Donation'); ?>
    </li>
	
	<li>
        <?php 		
		if($this->session->userdata('name')!=null) {
			echo anchor('users/dashboard', 'My Profile'); 
		}
		?>
		
	
	
	</li>
	
	<li>
		<?php 
		if($this->session->userdata('name')!=null) {
			echo anchor('login/logout/0', 'Logout');
		}
		?>
    </li>

	</li>
</ul>

</div>