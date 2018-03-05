<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- <meta http-equiv="refresh" content="5"> -->
			<title>Your Page</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="style.css" rel="stylesheet">
			<link href="css/student_index.css" rel="stylesheet">
			<link href="css/student_index_responsive.css" rel="stylesheet">
			<link href="css/login.css" rel="stylesheet">			
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
		   
		   
		   
		 <div class="header_top_area area ">
		    <div class="container-fluid">
				 <div class="header row">
					 <div class="col-md-3 col-sm-3 text-left sch_name">
					    <h2>Women Worker</h2>
					 </div>
					 <div class="col-md-3 col-sm-3   col-sm-offset-3 text-right col-md-offset-6  stu_btn">
					    <ul>
						   <li><a href="index.php">Home</a></li>
						   <li><a href="login.php">LOG IN</a></li>
						</ul>
					 </div>
				 </div>
		    </div>
		 </div>
				 
				 

				 <div class="col-md-12 col-sm-10 middele_section">
			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>


<?php
        include("config.php");

		//$sql = "SELECT * FROM `fundraiser` ORDER BY `fundraiser`.`id` ASC";
		$query="SELECT * FROM fundraiser WHERE type='Women Worker' ";
		//$query="SELECT * FROM fundraiser";
		$result=mysqli_query($con,$query);
		if($result)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$ID   =$row['id'];
				$img_url=$row['file'];
				$username = $row['user_name'];
				$Title = $row['title'];
				$link="Trending.php?id=$ID";
				$img_url=str_replace(' ', '%20', $img_url);
				echo "<img src=$img_url width='200'>.<br>";
				echo "<a href=$link>$Title</a><br>";			
				echo "GOAL : ".$row['goal']." <br>";
				echo "-----------------------------<br>";

   			}
			//echo "working </br>";
		}
		else
		{
			echo "not working";
		}
		
		
?>
				
				</div>
			  </div>
			</div>				 
			 </div>               
			</div>
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