<?php
     include('check-session.php');
     include('config.php');
     if(isset($_POST['receive']))
     {  
       //session_start();
      try{
		        $Per_type = $_POST['trust'];
		        $Per_name = $_POST['rec_name'];
		        $Per_mail = $_POST['rec_email'];
		        $Per_info = $_POST['per_info'];

		        $_SESSION['login']['trust']     = $Per_type;
		        $_SESSION['login']['rec_name']  = $Per_name;
		        $_SESSION['login']['rec_email'] = $Per_mail;
		        $_SESSION['login']['per_info']  = $Per_info;


			    if(empty($Per_type))
			    {
			       	throw new Exception("Trust Person Type Required");	        	
			    }
			    if(empty($Per_name))
			    {
			       	throw new Exception("Name Required");	        	
			    }
			    if(empty($Per_mail))
			    {
			       	throw new Exception("Mail id Required");	        	
			    }
			    if(filter_var($Per_mail, FILTER_VALIDATE_EMAIL) == false)
			    {
			    	throw new Exception("Valid mail id required");
			    }  	       	            
			    if(empty($Per_info))
			    {
			       	throw new Exception("Person information Required");	        	
			    }
			    else
			    {
    	            echo $_SESSION['trust'];
                    echo "</br>";
                    echo $_SESSION['rec_name'];
                    echo "</br>";
                    echo $_SESSION['rec_email'];
                    echo "</br>";
                    echo $_SESSION['per_info'];
		            header('location:goals.php'); 
			    }
			}       
        catch(Exception $e)
        {
		$error_message=$e->getMessage(); 
	    }
      
      }
      if(isset($_POST['skip']))
      {
      	header('location:goals.php');
      }

?>

<?php
		if(isset($error_message))
		{
			
			echo '<script language="javascript">';
			echo 'alert("'. $error_message.'")';
			echo '</script>';
			
		}

 ?>


<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Receiver</title>
			
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
                            <div class="col-md-12 col-xs-12  col-sm-3 header_top_area_right text-right wow fadeInDown animated" data-wow-delay="1s">
                                <ul>
                                	<li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
									<li><a href="logout.php">Profile</a></li>
                                    <li><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                    <li><a href="exit.php">Log Out</a></li>
                                </ul>
                            </div>
						</div> 
					</div>
				</div>
			</div>
            <!--[HEADER TOP ]-->
		
		
		
		
		    <!--[LOGO MENU]-->
		   <!--<div class="logo_menu_area">
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
								   <li class="smooth-menu"><a href="#about">About</a></li>
								   <li class="smooth-menu"><a href="#service">How it works</a></li>
								   <li class="smooth-menu"><a href="#testimonial">Trending</a></li>
								   <li class="smooth-menu"><a href="#contact">Contact</a></li>
								</ul>
							</div>
					    </div>
					</div>
			    </div>
		    </div>-->
		    <!--[LOGO MENU]-->
		
		
		
		
		
		  
		    <!--[login]-->

			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>Receiver Information</h2>
					   </div>
				</div>

				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
						 <form action="" method="POST">
                          <select name="trust" class="form_controle" required>

                                <option >SELECT TRUSTED RECEIVER</option>
                                <option >Me</option>
                            	<option >Best Friend</option>
                            	<option >Co-Worker</option>
                            	<option >Teacher</option>
                            	<option >Neighbour</option>

                            </select> 
							<input type="text" class="form_controle" name="rec_name" placeholder="Receiver Name">
							<input type="text" class="form_controle" name="rec_email" placeholder="Receiver Email">
							<TEXTAREA  class="form_controle"   Name="per_info" placeholder="Personal Information" ></TEXTAREA>							
							<input type="submit"class="form_controle_btn" name="skip" value="SKIP">						
							<input type="submit"class="form_controle_btn" name="receive" value="NEXT">	
						</div>
						 </form>
					 </div>
				  </div>
				</div>
			  </div>
			</div>

		<!--[login]-->
		   
		
		
		
		
		
		
		
		
		
		
		 
		
		
		
		   <!--[fotter_area area]-->		
			<div class="fotter_area">
			    <div class="container-fluid">
					 <div class="row fotter_area_details">
						<div class="col-md-6 wow fadeInDown animated" data-wow-delay="1s">
						  <h3>About us</h3>
						  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industrLoremIpsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It not only five centuries, but also the leap into electronic typ</p>
						</div>
						<div class="col-md-2 col-md-offset-4 wow fadeInDown animated" data-wow-delay="1s">
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



                      





