<?php
include 'check-session.php';
?>

<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- <meta http-equiv="refresh" content="5"> -->
			<title>MY PAGE</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
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
        
			<!--[PRELOADER]-->
			<div id="preloader">
			   <div class="preloader_spinner"></div>
			</div>
			<!--[PRELOADER]-->
           
		   
		   
		   
		 <div class="header_top_area area ">
		    <div class="container-fluid">
				 <div class="header row">
					 <div class="col-md-3 col-sm-3 text-left sch_name">
					    <h2><a href="profile.php">Donation</a></h2>
					 </div>
					 <div class="col-md-3 col-sm-3   col-sm-offset-3 text-right col-md-offset-6  stu_btn">
					    <ul>
						   <li></li>
						   <li><a href="show.php">My Account</a></li>
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
								   <li><a href="">Your Page</a></li>
								   <li><a href="receiver_info.php">Receiver info</a></li>
								   <li><a href="">Help</a></li>							   
								  
							   </ul>
						</div>
												
				 </div>
				 
				<!--[end of leftsection]--> 
				 
				 
				 <!--[middele]-->
				 <div class="col-md-10 col-sm-10 middele_section">
			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>Display Information</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>
				 	<table border="2" cellspacing="5">
				 		<tr >
				 			<td><h4><b>Image</h4></td>
				 			<td><h4><b>Title</h4></td>
				 			<td><h4><b>Type</h4></td>
				 			<td><h4><b>Description</h4></td>
				 			<td><h4><b>Goal</h4></td>
				 			<td><h4><b>Remove</h4></td>
				 			<td><h4><b>View Information</h4></td>
				 		</tr>

				 	<?php
                        //include'check-session.php';
						//session_start();
						include('config.php');

						if(isset($_SESSION['login']['user_name']))
						{

							$sql = "select * from fundraiser where user_name='".$_SESSION['login']['user_name']."'";

							if($records = mysqli_query($con,$sql))
							{
								//echo "working";
							}
							else
							{
								//echo "not working";
							}
							//echo "<pre>";
							//var_dump($_SESSION);

							while($row = mysqli_fetch_assoc($records))
							 {
							 	$type    = $row['type'];
							 	$title   = $row['title'];
							 	$des     = $row['description'];
							 	$file    = $row['file'];
							 	$goal    = $row['goal'];

							 	$ID=$row['id'];
                                $del="display.php?delete=$ID";
                                $link="page_view.php?id=$ID";
                                $file=str_replace(' ', '%20', $file);

							 	echo "
							 	<tr>
							 	<td><img src=$file width=150 height=150></td>
							 	<td>$title</td>
							 	<td>$type</td>
							 	<td>$des</td>
							 	<td>$goal</td>
							 	<td><a href=$del>Delete</a></td>
							 	<td><a href=$link>VIEW</a></td>
							 	</tr>							 	
							 			";
							 }
						}

			        if(isset($_REQUEST['delete']))
			        {
			          if(!empty($_REQUEST['delete']))
			          {
			            $ID=$_REQUEST['delete'];
			            //echo $username;
			            $query="DELETE FROM fundraiser WHERE id='".$ID."'";
			            $result=mysqli_query($con,$query);
			            if($result)
			            {
			              header("location:display.php");
			              echo "DELETED ";
			            }
			            else
			            {
			              echo "FALSE";
			            }
			            //echo"<pre>";
			            //var_dump($_REQUEST);
			            //
			          }
			        }


		?>	
					  </div>
				 </div>
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



                      





