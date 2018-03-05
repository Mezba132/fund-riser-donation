<?php
	session_start();

     include('config.php');
     if(isset($_SESSION['login']))
     {
     	//echo"<pre>";
     	//var_dump($_SESSION['login']);
     	echo "By Session : ";
     	pageControl();
     	//header("location:title.php");
     }
     else if(isset($_POST['login']))
     {
                   $user_name=$_POST['user_name'];
                   $password=$_POST['password'];

		            $query ="select * from userinfo where user_name='".$user_name."' and password='".$password."'";

		            $pp=mysqli_query($con,$query);

		            //$count = mysqli_num_rows($pp);
		            
		            if( $row=mysqli_fetch_assoc($pp) )
		            {
		            	//$GLOBALS['roll']=$row['role'];

		            	setcookie("login","1",time() + 1800);
		            	$_SESSION['login']=$row;
		            	pageControl();
		            	//header("location:title.php");
		            }
		            else
		            {
		            	echo "Please enter your valid username and password";
		            	header("location:login.php");
		            }


     }
     function pageControl()
     {
     	//echo"<pre>";
     	//var_dump($_SESSION['login']);
     	$roll=$_SESSION['login']['role'];
     	echo "User Roll : ".$roll."<br>";

     	if(isset($_REQUEST['id']))
		{
			$id=trim($_REQUEST['id']); //send from the homepage by user's selection passed via URL ex:site.com?id=login 
			if($id=="login") //if user go to login the 
			{
				if($roll==1)
				{
					header("location:admin/category.php");
				}
				else
				{
					header("location:profile.php");
				}
				
				//echo "Login";
			}
			else if ($id=="register") 
			{
				header("location:profile.php");
			}
			else if($id=="fund") //if user want to create fundrise directly
			{
				header("location:title.php");
				//echo "FUND";
			}
			else
			{
				$page=$_SERVER['PHP_SELF'];
				header("location:$page");
			}
			
		}
		else
		{
			//echo ;
			die("Bad Request");
		}
     }
?>
<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>SIGN IN</title>
			
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
								   <li><a href="index.php">HOME</a></li>
								</ul>
							</div>
							<div class="col-md-6  col-sm-6 social_links text-center wow fadeInDown animated" data-wow-delay="1s">
								<ul>
								</ul>
							</div>
							<div class="col-md-3 col-xs-12  col-sm-3 header_top_area_right text-center wow fadeInDown animated" data-wow-delay="1s">
								<ul>
									<li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
									<li><a href="registration.php">Register</a></li>
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
				<div class="col-md-5 col-md-offset-3  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>SIGN IN</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-5 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
						 <form action="" method="POST">
							<input type="text" class="form_controle" name="user_name" placeholder="User Name">							
							<input type="password"class="form_controle" name="password" placeholder="Password">
							<input type="submit"class="form_controle_btn" name="login" value="log-in">				
						    <p>Not Registered <a href="registration.php">Sign up</a>here</p>
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



                      





