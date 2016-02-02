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
            <?php echo anchor('administrator/home', 'Home'); ?>
        </li>
        <li>
            <?php echo anchor('administrator/gallery', 'Gallery'); ?>
        </li>
        <li>
            <?php echo anchor('administrator/news', 'News'); ?>
        </li>
		<li>
            <?php echo anchor('administrator/careers', 'Careers'); ?>
        </li>
		<li>
            <?php echo anchor('administrator/donations', 'Donate'); ?>
        </li>
        <li>
            <?php echo anchor('administrator/logout', 'Logout'); ?>
        </li>


    </ul>
</div>