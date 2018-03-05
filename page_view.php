<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- <meta http-equiv="refresh" content="5"> -->
			<title>Display Information</title>
			
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
					    <h2>Donation</h2>
					 </div>
					 <div class="col-md-3 col-sm-3   col-sm-offset-3 text-right col-md-offset-6  stu_btn">
					    <ul>
						   <li><a href="index.php">Home</a></li>
						</ul>
					 </div>
				 </div>
		    </div>
		 </div>
				 
				 

				 <div class="col-md-12 col-sm-10 middele_section">
			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>FUNDRAISER INFORMATION</h2>
						  </br>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>

				<?php
				if(isset($_REQUEST['id']))
				        {
				          if(!empty($_REQUEST['id']))
				          {
				            $id=$_REQUEST['id'];

				            include 'config.php';
				            //echo $username;
				            $query="SELECT * FROM fundraiser where id='".$_REQUEST['id']."'";
				            $result=mysqli_query($con,$query);
				            if($result)
				            {
				            	if($rowdata=mysqli_fetch_assoc($result))
				            	{
				            		$pic     =$rowdata['file'];
									$title   =$rowdata['title'];
									$receiver=$rowdata['description'];
									$goal    =$rowdata['goal'];
									echo 
										"<center>
								     <div class='tranding'>
								     <div class='tranding_image'>
									     <img src=$pic width='250'>
									 </div>
									 <div class='tranding_title'>
									    $title
									 </div>
									 <div class='tranding_title'>
									 $receiver
									 </div>
								 	</div>
								 	<div class='tranding_title'>
									 AMOUNT : $goal
									 </div>
								 	</div></center>
										";
				            	}
				              //header("location:contact.php");
				              //echo "DELETED ";
				            }
				            else
				            {
				              echo "FALSE";
				            }
				            mysqli_close($con);
				            //echo"<pre>";
				            //var_dump($_REQUEST);
				            //
				          }
				        echo "
				        <a href='display.php' class='btn_filled' >BACK</a>";
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



                      





