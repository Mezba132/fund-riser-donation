<?php
        include'check-session.php';
        /*include('config.php');
		$info     = $_SESSION['login'];
        $fullname = $info['full_name'];
		$username = $info['user_name'];
		$email    = $info['email'];
		$phone    = $info['phone'];
		$gender   = $info['gender'];
		$photo    = $info['file'];*/
        //session_start();
		include('config.php');

			$sql = "select * from userinfo where user_name='".$_SESSION['login']['user_name']."'";

			$records = mysqli_query($con,$sql);

			while($info = mysqli_fetch_assoc($records))
			{
				$fullname = $info['full_name'];
				$username = $info['user_name'];
				$email    = $info['email'];
				$phone    = $info['phone'];
				$gender   = $info['gender'];
				$photo    = $info['file'];
			}
		if(isset($_POST['update']))
		{
			header("location:update_page.php");
		}
?>

<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>INFORMATION</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="style.css" rel="stylesheet">
			<link href="css/responsive.css" rel="stylesheet">
			<link href="css/login.css" rel="stylesheet">
			<link rel="stylesheet" href="css/animate.css">
			 <!--[css]-->
			 
			<!--[fonts]-->
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
			<!--[fonts]-->
			

			<!--[internet exploer]-->
			<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <!--[internet exploer]-->
    </head>
    
	
	
	<body>

		   <!--[HEADER TOP]-->
			<div class="header_top_area">
				<div class="container-fluid">
				    <div class="row">
						<div class="header_top_area_details">
							<div class="col-md-3 col-sm-3 header_top_area_left wow fadeInDown animated" data-wow-delay="1s " >
								<ul>
								   <li><a href="profile.php">HOME</a></li>
								</ul>
							</div>
							<div class="col-md-6  col-sm-6 social_links text-center wow fadeInDown animated" data-wow-delay="1s">
								<ul>
								</ul>
							</div>
							<div class="col-md-3 col-xs-12  col-sm-3 header_top_area_right text-center wow fadeInDown animated" data-wow-delay="1s">
								<ul>
									<li><a href="display.php">MY PAGE</a></li>
									<li><li>
									<li><a href="exit.php">Log Out</a></li>
								</ul>
							</div>
						</div> 
					</div>
				</div>
			</div>
            <!--[HEADER TOP ]-->
		

           
		  
		    <!--[login]-->
			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-left wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2><u>ACCOUNT Information</u></h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-left wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>

				 	<form action="" method="post">
                    <img src="<?php echo $photo ?>" width="200" height="200">				 	
				 	<br/>		 						 	
				 	<xml style=color:Blue >Full Name :</xml>
				 	<h1><?php echo $fullname ?></h1>
				 	<br/>
				 	<xml style=color:Blue >User Name :</xml>
				 	<h2><?php echo $username ?></h2>
				 	<br/>
				 	<xml style=color:Blue >Email :</xml>
				 	<h2><?php echo $email ?></h2>
				 	<br/>
				 	<xml style=color:Blue >Phone Number :</xml>
				 	<h2><?php echo $phone ?></h2>
				 	<br/>	
				 	<xml style=color:Blue >Gender :</xml>
				 	<h2><?php echo $gender ?></h2>
                    <br/><br/>
					<input type="submit" style="color:green" style="float: left" name="update" value="UPDATE">		 	
				</form>
				 </div>
				</div>
				  </div>
				</div>
			  </div>

		<!--[login]-->
		   	   
		   
		
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--[BOOTSTARP SOURCE PLUGIN]-->	
			<script src="js/bootstrap.min.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.easing.min.js"></script><!--[SCROLLING ANIMATION. OPEN SOURCE PLUGIN]-->	
			<script src="js/main.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->
			<script src="js/jquery.sticky.js"></script><!--[STICK THE MUNU AREA. OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.scrolly.js"></script><!--[SCROLL SPIE .SOURCE PLUGIN]-->	
			<script src="js/wow.min.js"></script> <!--[ANIMATION WOW JS .OPEN SOURCE PLUGIN]-->	
		 
        
    </body>
</html>