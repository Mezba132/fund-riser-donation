<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>RECEIVER</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/student_index.css" rel="stylesheet">
			<link href="css/student_index_responsive.css" rel="stylesheet">
			<link rel="stylesheet" href="css/animate.css">
			 <!--[css]-->
			 
			<!--[fonts]-->
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
			<!--[fonts]-->
			

			<!--[internet exploer]-->
			<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <!--[internet exploer]-->
    </head>
    
	
	
	<body>
        
			<!--[PRELOADER]-->
			<div id="preloader">
			   <div class="preloader_spinner"></div>
			</div>
			<!--[PRELOADER]-->
           
		   
		   
		   
		 <div class="header_top_area area ">
		    <div class="container-fluid">
				 <div class="header row">
					 <div class="col-md-6 col-sm-3   col-sm-offset-3 text-right col-md-offset-6  stu_btn">
					    <ul>
						   <li><a href="profile.php">Home</a></li>
						   <li><a href="exit.php">Log out</a></li>
						</ul>
					 </div>
				 </div>
		    </div>
		 </div>
		 
		 
		 
		 <div class="content_page container-fluid">
		    <div class="row">
				
               <!--[leftsection]-->

				<div class="col-md-2 col-sm-2  left_section text-left">
						<div class="left_first_first_section">
							<h2>Fundriser Profile</h2>
							   <ul>
								   <li><a href="display.php">Your Page</a></li>
								   <li><a href="">Receiver info</a></li>
								   <li><a href="">Help</a></li>
								   
								  
							   </ul>
						</div>
												
				 </div>
				 
				<!--[end of leftsection]--> 
				 
				 
				 <!--[middele]-->

				 <div class="col-md-10 col-sm-10 middele_section">
				 
				<?php
				        include'check-session.php';
				        //session_start();
						include('config.php');

							$sql = "select * from fundraiser where user_name='".$_SESSION['login']['user_name']."'";

							$records = mysqli_query($con,$sql);
							$count = mysqli_num_rows($records);

							if($count == 0)
							{
								echo "
								<center>
								No Page Create
								</center>";
							}
							else
							{				
								while($info = mysqli_fetch_assoc($records))
								{
									$receiver_type    = $info['trust'];
									$receiver_per     = $info['rec_name'];
									$receiver_email   = $info['rec_email'];
									$receiver_info    = $info['per_info'];

									echo 
									"
									<center>
									<div>
									RECEIVER TYPE : $receiver_type
									</div>
									<div>
									RECEIVER NAME : $receiver_per
									</div>
									<div>
									RECEIVER EMAIL : $receiver_email
									</div>
									<div>
									RECEIVER INFORMATION : $receiver_info
									</div>
									</center>
									";
								}
							}

				?>

				 <!--	<center>
				 		<form action="" method="post">

				 	<xml style=color:Blue >Full Name :</xml>
				 	<h1><?php echo $receiver_type ?></h1>
				 	<br/>
				 	<xml style=color:Blue >User Name :</xml>
				 	<h2><?php echo $receiver_per ?></h2>
				 	<br/>
				 	<xml style=color:Blue >Email :</xml>
				 	<h2><?php echo $receiver_email ?></h2>
				 	<br/>
				 	<xml style=color:Blue >Phone Number :</xml>
				 	<h2><?php echo $receiver_info ?></h2>
					</center>				 
				 
				 
				 </div>-->
				 

                
			</div>
		 </div>
		
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script><!--[BOOTSTARP SOURCE PLUGIN]-->	
			<script src="js/bootstrap.min.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.easing.min.js"></script><!--[SCROLLING ANIMATION. OPEN SOURCE PLUGIN]-->	
			<script src="js/main.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->
			<script src="js/jquery.sticky.js"></script><!--[STICK THE MUNU AREA. OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.scrolly.js"></script><!--[SCROLL SPIE .SOURCE PLUGIN]-->	
			<script src="js/wow.min.js"></script> <!--[ANIMATION WOW JS .OPEN SOURCE PLUGIN]-->	
		 
        
    </body>
</html>