<?php
     include('check-session.php');
     include('config.php');
     if (isset($_POST['description1'])) 
        {
            //session_start();
        	try
        	{

        			$details  = $_POST['description'];
		            $_SESSION['login']['description'] = $details;
		           // echo $_SESSION['login']['description'];
		            //echo $_SESSION['login']['type'];
	                //echo $_SESSION['login']['title'];

			        if(empty($details))
			        {
			        	throw new Exception("Description Required");	        	
			        }


                    $uploadPath = 'uploads/';
		            $destination=$uploadPath.basename($_FILES['fileToUpload']['name']);
					$sizeInByte=$_FILES["fileToUpload"]["size"];
					$sizeInKB=$sizeInByte*0.001;
					$typeArray = array("jpeg","png"); //edit file types from here.. or add your extra file type
					if($sizeInByte!=null)
	                {
						if($sizeInKB>250)
						{
							echo '<h1><font color="red">File Is Too Large</font></h1>';
						}
						else
						{
						    $flag=false;
							$fileType=$_FILES['fileToUpload']['type'];
							$fileType=explode('/',$fileType);
							$fileType=$fileType[1];
							//var_dump($GLOBALS);
							foreach ($typeArray as $type) 
							{
								if($fileType==$type)
								{
									//echo "File Can Be Uploaded";
									$flag=true;
									break;
								}
								else
								{
									$flag=false;
								}
						}
							if($flag)
							{
								echo "<pre>";
								$uploadPath = 'uploads/';
								$sourceFile=$_FILES["fileToUpload"]["tmp_name"];
								$destination =$uploadPath.basename($_FILES['fileToUpload']['name']);


								if(move_uploaded_file($sourceFile, $destination))
								{
				                    $_SESSION['login']['fileToUpload']['name'] = $destination; 
				                    //echo $_SESSION['login']['fileToUpload']['name'];

									//echo '<h1><font color="lime">File Uploaded Successfully</font></h1>';
								}
								else
								{
									//echo '<h1><font color="red">File is Not Uploaded</font></h1>';

								}
							}
						}
				    }

		            header('location:receiver.php');				    	
        }
        catch(Exception $e)
        {
		$error_message=$e->getMessage(); 
	    }
		       


		       /* if($_POST['description']!=null)     //!empty($_POST['description'])
		        {
		            ob_start();         
		            $details  =$_POST['description'];
		            $_SESSION['description'] = $details;
		            //mail($to,$subject,$message,$header);
		            header('location:receiver.php');
		            //echo "<pre>";
		            var_dump($_SESSION);
		            //ob_end_flush();
		        }
		        else
		        {
		            //echo "Must Fill Up";
		            
		        }*/

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

<!--<script type="text/javascript">window.top.window.stopUpload(<?php echo $success; ?>,'<?php echo $uploadedFile; ?>');</script>-->

<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Details</title>
			
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
			<script src="javascript.js" type="text/javascript"></script>
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
						  <h2>DESCRIPTION</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
					 	<div id="content">
						 <form action="" method="post" enctype="multipart/form-data">
						    <TEXTAREA Name="description" class="form_controle"  placeholder="Tell the story" ></TEXTAREA>
						    <input class="frm_cnt_br" type="file" name="fileToUpload">
							<input type="submit"class="form_controle_btn" name="description1" value="NEXT">	
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



                      





