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

        <title>WelTec | Careers</title>

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
                <h2>Careers</h2>
					
					<p>
	Enter Job Listing Details  </p>


                <div class="row" style="width:500px; margin-top: 30px;" >

                        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="companyname">Company Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="jobtitle">Job Title:</label>
                            <div class="col-sm-8">
                                <input name="jobtitle" type="text" class="form-control" placeholder="Enter Job Title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="description">Job Description:</label>
                            <div class="col-sm-8">
                                <textarea name="description" rows="4" cols="25" placeholder="Enter Job Description"class="form-control" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="city">City:</label>
                            <div class="col-sm-8">
                                <input name="city" type="text" class="form-control" id="city" placeholder="Enter City" required>
                            </div>
                        </div>
						
						  <div class="form-group">
                            <label class="control-label col-sm-4" for="country">Country:</label>
                            <div class="col-sm-8">
                                <input name="country" type="text" class="form-control" id="country" placeholder="Enter Country" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-4">Email:</label>
                            <div class="col-sm-8">
                                <input name="email" type="email" class="form-control"  placeholder="Enter Email" required>
                            </div>
                 
						 <div class="form-group">
                            <label class="control-label col-sm-4" for="department">Job Department:</label>
                            <div class="col-sm-8">
                                <select name="type" class="form-control">
                                    <option value="1">Information Technology</option>
                                    <option value="2">Engineering</option>
                                    <option value="3">Hospitality</option>
									<option value="4">Tourism</option>
									<option value="5">Hairdressing, Beauty and Make-up Artistry</option>
									<option value="6">Construction</option>
									<option value="7">Exercise Science & Recreation</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>

                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="merchant@9walls.in">
                        <input type="hidden" name="item_name" value="WelTec Donation">
                        <input type="hidden" name="currency_code" value="USD">
                        
                        
                    </form></div>
            </div>




        </div><!--/row-->
    </div>
<?php
// define variables and set to empty values
$companyname = ""; 
$jobtitle = ""; 
$description= ""; 
$city= ""; 
$country= ""; 
$email= ""; 
$department= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $companyname = isset($_POST["companyname"]) ? test_input($_POST["companyname"]) : null;
   $jobtitle= isset($_POST["jobtitle"]) ? test_input($_POST["jobtitle"]) : null;
   $email = isset($_POST["email"]) ? test_input($_POST["email"]) : null;
   $description= isset($_POST["description"]) ? test_input($_POST["description"]) : null;
   $country= isset($_POST["country"]) ? test_input($_POST["country"]) : null;
   $department=isset($_POST["type"]) ? test_input($_POST["type"]) : null;
   $city=isset($_POST["city"]) ? test_input($_POST["city"]) : null;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aluminator";
if($companyname!=null || $companyname!='')
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO jobs (company, jobtitle, description, city, country,  email, department)
VALUES ('".$companyname."', '".$jobtitle."', '".$description."','".$city."', '".$country."', '".$email."','".$department."')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/aluminator/index.php/administrator/careers");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>

        <script>
            function deletejob(id) {
//                alert(id);
//                return false;
                if (confirm("Are you sure to delete ?")) {
                    var frm = document.form2;
                    frm.id.value = id;
                    frm.submit();
                }
            }
            
        </script>
		


<?php echo form_open('administrator/careers', array('class' => 'reg-page', 'name' => 'form2')); ?>
                        <table>
                            <tr style="font-weight: bold;">
								<td style="padding: 10px;">Job ID</td>
								<td style="padding: 10px;">Job Title</td>
								<td style="width:200px; padding: 10px;">Description</td>
								<td style="width:200px; padding: 10px;">Action</td>
								<td style="padding: 10px;">Action</td>
								</tr>
                            <?php
                            $query = mysql_query("SELECT * FROM `jobs` ORDER BY `id` DESC");
                            $count = 1;
                            
							while ($fetch = mysql_fetch_array($query)) {
                                ?>
                                <tr><td style="padding: 10px;"><?php echo $fetch['id']; ?></td><td style="padding: 10px;"><?php echo $fetch['jobtitle']; ?></td>
                                    <td style="width:400px; height:100px; overflow:auto; display: inline-block; white-space :no-wrap; padding: 10px;"><p><?php echo $fetch['description']; ?></p></td>
                                    
                                    
                                    <td style="padding:10px;"><a href="#" onclick="return deletejob('<?php echo $fetch['id']; ?>');">Delete</a></td>
									     
										 
										 <td style="padding:10px;"><?php echo anchor('administrator/applicants/'.$fetch['department'], 'Suitable Applicants');?></td>
									
									</tr>
									
										
                                <?php $count++;

                            }
                            ?>
                        </table>
                        <input type="hidden" name="id" value="">
                        </form>
                    </div>
                </div>	
</body>
</html>
