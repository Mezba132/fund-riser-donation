<?php
     include('check-session.php');
    include('config.php');
     if(isset($_POST['final']))
    {
        ob_start();      
        if(isset($_SESSION['login']['type']))
        {    
            
          if(isset($_SESSION['login']['title']))
          {
          	
            if(isset($_SESSION['login']['description']))
            {
            	
               if(isset($_SESSION['login']['fileToUpload']['name']))
            	{
            		 
                 if(isset($_SESSION['login']['trust']))
                  {
                  	
                    if(isset($_SESSION['login']['rec_name']))
                    {
                       if(isset($_SESSION['login']['rec_email']))
                        {
                            if(isset($_SESSION['login']['per_info']))
                            {
                            	echo $_SESSION['login']['user_name'];
                                echo "</br>"; 
                                echo $_SESSION['login']['type'];
                                echo "</br>";                              
                                echo $_SESSION['login']['title'];
                                echo "</br>";                               
                                echo $_SESSION['login']['description'];
                                echo "</br>";
                                echo $_SESSION['login']['fileToUpload']['name'];
                                echo "</br>";                                
                                echo $_SESSION['login']['trust'];
                                echo "</br>";
                                echo $_SESSION['login']['rec_name'];
                                echo "</br>";
                                echo $_SESSION['login']['rec_email'];
                                echo "</br>";
                                echo $_SESSION['login']['per_info'];
                                echo "</br>";

                                try
                                {
                                	$username = $_SESSION['login']['user_name'];
                                	$title = $_SESSION['login']['type'];
                                	$type = $_SESSION['login']['title'];
                                	$des = $_SESSION['login']['description'];
	                                $destination = $_SESSION['login']['fileToUpload']['name'];
	                                $trust = $_SESSION['login']['trust'];
	                                $recname = $_SESSION['login']['rec_name'];
	                                $recmail = $_SESSION['login']['rec_email'];
	                                $recinfo = $_SESSION['login']['per_info'];
	                                $Goal = $_POST['goal'];
	                                $_SESSION['login']['goal'] = $Goal;
	                                echo $_SESSION['login']['goal'];

	                                if(empty($Goal))
							        {
							        	throw new Exception("Set your Goal");	        	
							        }
							        else
							        {
							        	$result ="INSERT INTO fundraiser VALUES (DEFAULT,'$username','$title','$type','$des','$destination','$trust','$recname','$recmail','$recinfo','$_POST[goal]')";
		                                //$result ="INSERT INTO fundraiser VALUES (DEFAULT,'$_SESSION[login]','$_SESSION[type]','$_SESSION[title]','$_SESSION[description]','$destination','$_SESSION[trust]','$_SESSION[rec_name]','$_SESSION[rec_email]','$_SESSION[per_info]','$_POST[goal]')";
		                                $query = mysqli_query($con,$result);

		                                if($query)
		                                {
		                                    echo "successful";
		                                }
		                                else
		                                {
		                                    echo "not done";
		                                }

		                                }
		                                header('location:display.php');
		                                /*if($_POST)
									    {
									        mail($to,$subject,$message,$header);
									        header('location:display.php');
									        ob_end_flush();
									    }*/
							        }
							        catch(Exception $e)
							        {
									$error_message=$e->getMessage(); 
								    }                                
                                }
                                //echo $_SESSION['goal']; 
                            }
                        }
                    }
                    else
                    {

                        	$username = $_SESSION['login']['user_name'];
                        	$title = $_SESSION['login']['type'];
                        	$type = $_SESSION['login']['title'];
                        	$des = $_SESSION['login']['description'];
                            $destination = $_SESSION['login']['fileToUpload']['name'];
                            $Goal = $_POST['goal'];
                            $_SESSION['login']['goal'] = $Goal;
                            echo $_SESSION['login']['goal'];
                            try
                            {
	                            if(empty($Goal))
						        {
						        	throw new Exception("Set your Goal");	        	
						        }
						        else
						        {
						        	$result ="INSERT INTO fundraiser VALUES (DEFAULT,'$username','$title','$type','$des','$destination','$_POST[goal]')";
	                                //$result ="INSERT INTO fundraiser(id,user_name,type,title,description,file,goal) VALUES (DEFAULT,'$_SESSION[login]','$_SESSION[type]','$_SESSION[title]','$_SESSION[description]','$destination','$_POST[goal]')";
	                                $query = mysqli_query($con,$result);

	                                if($query)
	                                {
	                                    echo "successful-1";
	                                }
	                                else
	                                {
	                                    echo "not done-1";
	                                }
	                               // header('location:display.php');
	                            }
                            }
					        catch(Exception $e)
					        {
							$error_message=$e->getMessage(); 
						    } 

		                }

            	  } 
                }
            }
        }   
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

			<title>GOAL</title>
			
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
									<li><a href="show.php">My Account</a></li>
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
						  <h2>TOTAL AMOUNT</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
						 <form action="" method="POST">
						<input type="text" class="form_controle" name="goal" placeholder="Goal">					
						<input type="submit"class="form_controle_btn" name="final" value="CONFIRM">	
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



                      





