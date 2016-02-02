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

        <title>WelTec | Donation </title>

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
                <h2>Donation</h2>
                <p>
You'll be giving Weltec financial security in an environment of uncertain government funding and growing global competition
You'll be allowing Weltec to compete for the best scholars, tutors and researchers
If you had a great experience as a student at Weltec, giving to the college helps others to have a great experience here too. It's your chance to give something back
You'll be helping make sure Weltec can attract the most gifted students from around the world, irrespective of their ability to pay
Keeping Weltec in its position as a top college benefits all current and future alumni in their careers
You could be providing the infrastructure and facilities needed to support world-class students, academics and cutting-edge research
Some of our benefactors have no direct link to the college, but they have huge pride in what the college has done, and continues to do for New Zealand and internationally
Weltec success will benefit all of New Zealand. Weltec appreciates your generous donation.  </p>


                <div class="row" style="width:500px; margin-top: 30px;" >
                    <!--<form class="form-horizontal" role="form">    "https://www.sandbox.paypal.com/cgi-bin/webscr", -->
                        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="first_name">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">Last Name:</label>
                            <div class="col-sm-8">
                                <input name="lastname" type="text" class="form-control" placeholder="Enter Last Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="address1">Address:</label>
                            <div class="col-sm-8">
                                <textarea name="address1" rows="4" cols="25" placeholder="Enter Address"class="form-control" required></textarea>
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
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">Amount:</label>
                            <div class="col-sm-8">
                               <input type="number" name="amount" class="form-control"/>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="control-label col-sm-4" for="last_name">Type of Donation:</label>
                            <div class="col-sm-8">
                                <select name="type" class="form-control">
                                    <option value="Alumni scholarship fund">Alumni scholarship fund</option>
                                    <option value="College business development fund">College business development fund</option>
                                    <option value="College Education development fund">College Education development fund</option>
									<option value="College humanity and social fund">College humanity and social fund</option>
									<option value="College art development fund">College art development fund</option>
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
                        <input type="hidden" name="item_name" value="WelTech Donation">
                        <input type="hidden" name="currency_code" value="USD">
                        
                        
                    </form></div>
            </div>




        </div><!--/row-->
    </div>
<?php
// define variables and set to empty values
$firstname =  $lastname = $address= $city= $country= $email= $amount= $donationtype="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstname = test_input($_POST["firstname"]);
   $lastname= test_input($_POST["lastname"]);
   $email = test_input($_POST["email"]);
   $address= test_input($_POST["address1"]);
   $country=test_input($_POST["country"]);
   $amount=test_input($_POST["amount"]);
   $donationtype=test_input($_POST["type"]);
   $city=test_input($_POST["city"]);
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
if($firstname!=null || $firstname!='')
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "INSERT INTO donate (firstname, lastname, address, city, country,  email, amount, donationtype)
VALUES ('".$firstname."', '".$lastname."', '".$address."','".$city."', '".$country."', '".$email."', '".$amount."','".$donationtype."')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://www.sandbox.paypal.com/cgi-bin/webscr");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>	
</body>
</html>
