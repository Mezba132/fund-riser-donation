<?php
    include('check-session.php');
	include ('config.php');
	if(isset($_POST['contact']))
	{
		$Name    = $_POST['name'];
		$Email   = $_POST['email'];
		$Message = $_POST['message'];

		$query   = "INSERT INTO contact VALUES(DEFAULT,'".$Name."','".$Email."','".$Message."')";
		$result  = mysqli_query($con,$query);
		if($result)
		{
			echo "<script>alert('Message Send To Admin');</script>";
		}
	}
?>
<?php

	        include ('config.php');

			$sql = "select * from fundraiser";

			if($records = mysqli_query($con,$sql))
			{
				//echo "working";
			}
			else
			{
				//echo "not working";
			}

			while($row = mysqli_fetch_assoc($records))
			 {
			 	$title   = $row['title'];
			 	$file    = $row['file'];
			 	$goal    = $row['goal'];
			 }
?>
<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>WELCOME</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="style.css" rel="stylesheet">
			<link href="css/responsive.css" rel="stylesheet">
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
							<div class="col-md-3 col-sm-3 header_top_area_left wow fadeInDown animated" data-wow-delay=".5s " >
								<ul>
								  <!-- <li><a ><i class="fa fa-phone" aria-hidden="true"></i></a></li>
								   <li><a >+01752918411</a></li>-->
								</ul>
							</div>
							<div class="col-md-6  col-sm-6 social_links text-center wow fadeInDown animated" data-wow-delay=".5s">
								<ul>
									<form action="search.php" method="post">									
										 	<input type="text" name="search" size="25" placeholder="SEARCH CATEGORY" />
		                                    <!--<input type="submit" name="done" value="search" />-->
		                                    <button type="submit"><img src="search.png" alt="Submit"></button>
									</form>	
								</ul>
							</div>
							<div class="col-md-3 col-xs-12  col-sm-5 header_top_area_right text-center wow fadeInDown animated" data-wow-delay=".5s">
								<ul>
								    <li><a href="display.php">MY PAGE</a></li>
								    <li><a href=""><i class="fa fa-user" aria-hidden="true"></i></a></li>
									<li>

									<?php
									$name  =$_SESSION['login']['full_name'];
					     			$link  ="show.php?user_name='".$_SESSION['login']['user_name']."'";
					     			echo 
					     			"
									    <a href=$link>$name</a>
					     			";
								    ?>
									</li>									
									<li><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    <li><a href="exit.php">Log Out</a></li>
								</ul>
							</div>
						</div> 
					</div>
				</div>
			</div>
            <!--[HEADER TOP ]-->
		
		
		
		
		    <!--[LOGO MENU]-->
		    <div class="logo_menu_area">
			   <div class="container-fluid">
					<div class="row logo_menu">
					    <div class="col-md-4 logo ">
						  <a href=""><img src="images/logo.png"></a>
					    </div>
					    <div class="col-md-8 menu">
						    <div class="navbar-header">
								 <button class="collapsed navbar-toggle" data-toggle="collapse" data-target="#mainnav" >
								   <i class="fa fa-bars"></i>
								 </button>
							</div>
							<div id="mainnav"class="collapse navbar-collapse navbar-right">
								<ul class="nav navbar-nav">
								   <li class="active smooth-menu"><a href="#fawesome-carousel">Home</a></li>
								   <li class="smooth-menu"><a href="#testimonial">Trending</a></li>
								   <li class="smooth-menu"><a href="#category">Category</a></li>
								   <li class="smooth-menu"><a href="#service">How it works</a></li>
								   <li class="smooth-menu"><a href="#about">About</a></li>
								   <li class="smooth-menu"><a href="#contact">Contact</a></li>
								</ul>
							</div>
					    </div>
					</div>
			    </div>
		    </div>
		    <!--[LOGO MENU]-->
		
		
		
		
		
		
		    <!--[slider area]-->	
		
			<div id="fawesome-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			
	 
				<div class="carousel-inner" role="listbox">
				    <div class="item active">
					   <div class="slider_area">
							<div  class="slider_bg slider_bg_1 "></div>
							    <div class="container-fluid">
									<div class="row">
										<div class="col-md-12 col-xs-12 slider_text text-center wow fadeInDown animated" data-wow-delay="1s">
											<h2>Help poor Children and Woman</h2>
											<p>Get the best service from us</p>
											<a href="login.php?id=fund" class="btn_filled" >Create Fundraise</a>
											<!--<td ><input type="submit" value="Create Fundraise" name="createfund"></td>-->
										</div>
									</div>
							    </div>
						</div>
					</div>
				
					<div class="item">
						 <div class="slider_area">
							<div  class="slider_bg slider_bg_2 "></div>
							    <div class="container-fluid">
									<div class="row">
										<div class="col-md-12 col-xs-12 slider_text text-center wow fadeInDown animated" data-wow-delay="1s">
											<h2>Help poor Children and Woman</h2>
											<p>Get the best service from us</p>
											<a href="login.php?id=fund" class="btn_filled" >Create Fundraise</a>
										</div>
									</div>
							   </div>
						</div>
					</div>
					
					<div class="item">
						 <div class="slider_area">
							 <div  class="slider_bg slider_bg_3 "></div>
							    <div class="container-fluid">
									<div class="row">
										<div class="col-md-12 col-xs-12 slider_text text-center wow fadeInDown animated" data-wow-delay="1s">
											<h2>Help poor Children and Woman</h2>
											<p>Get the best service from us</p>
                                            <a href="login.php?id=fund" class="btn_filled" >Create Fundraise</a>
										</div>
									</div>
							   </div>
						</div>
					</div>
					
					<div class="item">
						 <div class="slider_area">
							 <div   class="slider_bg slider_bg_4 "></div>
							    <div class="container-fluid">
									<div class="row">
										<div class="col-md-12 col-xs-12 slider_text text-center wow fadeInDown animated" data-wow-delay="1s">
											<h2>Help poor Children and Woman</h2>
											<p>Get the best service from us</p>
											<a href="login.php?id=fund" class="btn_filled" >Create Fundraise</a>
										</div>
									</div>
							   </div>
						</div>
					</div>
				</div>
	 
					<a class="left fawesome-control" href="#fawesome-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="right fawesome-control" href="#fawesome-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>
		
		    <!--[slider area]-->
		
		
		
		
		
				<!--[testimonial area]-->
			<div id="testimonial"class="testimonial_area" >
				<div class="container-fluid">
					<div class="row">
					   <div class="col-md-12 text-center page_title wow fadeInDown animated" data-wow-delay=".5s">
						 <h2>TRENDING</h2>
					   </div>
					</div>
					<div class="row testimonial_page_details page_details wow fadeInDown animated" data-wow-delay=".5s ">
						
							 
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<div class="single_testimonial">
										  <div class="tranding">
											     <div class="tranding_image">
											     	<?php
											     		include 'config.php';
											     		$query="SELECT * FROM fundraiser";
											     		$result=mysqli_query($con,$query);
											     		while($rowdata=mysqli_fetch_assoc($result))
											     		{
											     			$ID   =$rowdata['id'];
											     			$pic  =$rowdata['file'];
											     			$title=$rowdata['title'];
											     			$link="Trending.php?id=$ID";
											     			echo 
											     			"
														     <div class='tranding'>
														     <div class='tranding_image'>
															     <img src=$pic width='150' height='150'>
															 </div>
															 <div class='tranding_title'>
															    <a href=$link>$title</a>
															 </div>
														 	</div>
											     			";

											     		}
											     		mysqli_close($con); 
											     	?>
												 </div>
											 </div>									
										  
										</div>
											
									
								</div>
							</div>
					</div>
				</div>
			</div>
		    <!--[testimonial area]-->	
		
		
		
		

		
		
		
				<div id="category" class="our_services_area">
				 <div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-center page_title wow fadeInDown animated" data-wow-delay=".5s">
							<h2>CATEGORY</h2>
					    </div>
					</div>
					<div class="row page_details">
						
                       <div class="col-md-2 wow fadeInDown animated" data-wow-delay="1s">
							 <div class="subtitle text-center">		
							 <div class="icons"><a href=""> <i class="fa fa-child" aria-hidden="true"></a></i></div>							 	  
								<h5><a href="street_children.php">Street Children </a></h5>
							</div>
						   
						</div>
						
						<div class="col-md-3 wow fadeInDown animated" data-wow-delay="1s">
							 <div class="subtitle text-center">		
								<div class="icons"><a href=""> <i class="fa fa-university" aria-hidden="true"></a></i></div>							 	  
								<h5><a href="educational_fee.php">Educational Fee</a></h5>
							</div>
						   
						</div>
						
						<div class="col-md-3 wow fadeInDown animated" data-wow-delay="1s">
							 <div class="subtitle text-center">		
							 <div class="icons"><a href=""> <i class="fa fa-female" aria-hidden="true"></a></i></div>	  
								<h5><a href="women_worker.php">Women Worker</a></h5>
							</div>
						   
						</div>
						
						<div class="col-md-2 wow fadeInDown animated" data-wow-delay="1s">
							 <div class="subtitle text-center">	
							 <div class="icons"><a href=""> <i class="fa fa-graduation-cap" aria-hidden="true"></a></i></div>		  
								<h5><a href="foreign_studies.php">Foreign Studies</a></h5>
							</div>
						   
						</div>
						
						<div class="col-md-2 wow fadeInDown animated" data-wow-delay="1s">
							 <div class="subtitle text-center">	
							 <div class="icons"><a href=""> <i class="fa fa-lightbulb-o" aria-hidden="true"></a></i></div>		  
								<h5><a href="creative_idea.php">Creative Idea</a></h5>
							</div>
						</div>						
					</div>
			    </div>									
			</div>
		</div>
		    <!--[service area]-->		
		
		
		
		
			 <!--[service area]-->
			<div id="service" class="our_services_area">
			    <div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-center page_title wow fadeInDown animated" data-wow-delay=".5s">
							<h2>HOW IT WORKS</h2>
					    </div>
					</div>
					<div class="row page_details">
						<div class="col-md-4 wow fadeInDown animated" data-wow-delay=".5s">
							 <div class="subtitle text-center">			  
								<h5>Create Fundraise</h5>
							</div>
						   <p>Click the 'Create Fundraise' button and complete a series of simple questions to create your page.</p>
						</div>
						<div class="col-md-4 wow fadeInDown animated" data-wow-delay=".5s">
							  <div class="subtitle text-center">			  
							   
								<h5>Share with Family and Friends</h5>
							 </div>
							  <p>Share your Page with your friends and family via facebook,google-plus,twitter.</p>
						</div>
						<div class="col-md-4 wow fadeInDown animated" data-wow-delay=".5s">
							 <div class="subtitle text-center ">			  
							   
								<h5>Easily Accept Donations</h5>
							</div>
							<p>Receive your money by requesting a check or bank transfer.</p> 
						</div>
					</div>
			    </div>
				
				
				
				
				
			    <!--[ABOUT area]-->
			<div id="about" class="about_us_area">
			    <div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-center page_title  wow fadeInDown animated" data-wow-delay=".5s">
							<h2>ABOUT US</h2>
						</div>
					</div>
					<div class="row page_details">
					    <div class="col-md-6 col-xs-12 about_details  wow fadeInDown animated" data-wow-delay=".5s">
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a</p> 
						   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis</p> 

					    </div>
						<div class="col-md-6 col-xs-12  about_details text-right wow fadeInDown animated" data-wow-delay=".5s">
							   <img src="img/img5.jpg">
						</div>
					</div>
			    </div>
			</div>
		    <!--[ABOUT area]-->			
				

		
		
		
		

		



				   <!--[contact area]-->
			<div id="contact" class="contact_us_area">
			    <div data-velocity="-.09"  class="contact_us_area_bg paralax_bg "></div>
					<div class="container-fluid">
						<div class="row">
						   <div class="col-md-12 text-center page_title contact wow fadeInDown animated" data-wow-delay=".5s">
							 <h2>Contact us</h2>
						   </div>
						</div>
						<div class="row page_details">
							<div class="col-md-12 col-xs-12 about_details wow fadeInDown animated" data-wow-delay=".5s ">
							    <div class="form_bg">
									 <form action="" method="POST">
										<input type="text"class="form_controle" name="name" placeholder="Name">
										<input type="text"class="form_controle" name="email" placeholder="Email">
										<input type="text"class="form_controle_message" name="message" placeholder="Message">
										<input type="submit"class="form_controle_btn" name="contact" value="Send">
									 </form>
							    </div>
							</div>
							
						</div>
			        </div>
			</div>
		   <!--[contact area]-->

		
		
	
		

		
		   <!--[contact area]-->
			<!--<div id="contact" class="contact_us_area">
			    <div data-velocity="-.09"  class="contact_us_area_bg paralax_bg "></div>
					<div class="container-fluid">
						<div class="row">
						   <div class="col-md-12 text-center page_title contact wow fadeInDown animated" data-wow-delay="1s">
							 <h2>Contact us</h2>
						   </div>
						</div>
						<div class="row page_details">
							<div class="col-md-12 col-xs-12 about_details wow fadeInDown animated" data-wow-delay="1s ">
							    <div class="form_bg">
									 <form action="" method="POST">
										<input type="text"class="form_controle" name="name" placeholder="Name">
										<input type="text"class="form_controle" name="email" placeholder="Emai">
										<input type="text"class="form_controle_message" name="message" placeholder="Message">
										<input type="submit"class="form_controle_btn" name="contact" value="Send">
									 </form>
							    </div>
							</div>
							
						</div>
			        </div>
			</div>-->
		   <!--[contact area]-->
		
		
		
		
		
		   <!--[fotter_area area]-->		
			<div class="fotter_area">
			    <div class="container-fluid">
					 <div class="row fotter_area_details">
						<div class="col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
						  <h3>About us</h3>
						  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industrLoremIpsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It not only five centuries, but also the leap into electronic typ</p>
						</div>
						<div class="col-md-2 col-md-offset-4 wow fadeInDown animated" data-wow-delay=".5s">
						    <h3>Our Address:</h3>
						    <p>
							  Nikunja-2,khilkhet,Dhaka
							  Contact:01752918411</p>
							  <div class="socials_icons fotter_social">
								<ul>
								   <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								   <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								   <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								   <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							 </div>
						</div>
					 </div>
			    </div>
			</div>
		   <!--[fotter_area area]-->	
		
		
		
		
		   
		   
		   
		   
		
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--[BOOTSTARP SOURCE PLUGIN]-->	
			<script src="js/bootstrap.min.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.easing.min.js"></script><!--[SCROLLING ANIMATION. OPEN SOURCE PLUGIN]-->	
			<script src="js/main.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->
			<script src="js/jquery.sticky.js"></script><!--[STICK THE MUNU AREA. OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.scrolly.js"></script><!--[SCROLL SPIE .SOURCE PLUGIN]-->	
			<script src="js/wow.min.js"></script> <!--[ANIMATION WOW JS .OPEN SOURCE PLUGIN]-->	
		 
        
    </body>
</html>



                      





