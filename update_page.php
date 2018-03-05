<?php
        /*session_start();
		include('config.php');
		$sql = "select * from userinfo where user_name='".$_SESSION['login']."'";
		$records = mysqli_query($con,$sql);

		while($info = mysqli_fetch_assoc($records))
		{
			$fullname = $info['full_name'];
			$username = $info['user_name'];
			$email    = $info['email'];
			$phone    = $info['phone'];
			$photo    = $info['file'];
			$Gender   = $info['gender'];
		}*/

		include'check-session.php';
        include('config.php');
		$info     = $_SESSION['login'];
        $fullname = $info['full_name'];
		$username = $info['user_name'];
		$email    = $info['email'];
		$phone    = $info['phone'];
		$gender   = $info['gender'];
		$photo    = $info['file'];
        //session_start();
		/*include('config.php');

			$sql = "select * from userinfo where user_name='".$_SESSION['login']."'";

			$records = mysqli_query($con,$sql);

			while($info = mysqli_fetch_assoc($records))
			{
				$fullname = $info['full_name'];
				$username = $info['user_name'];
				$email    = $info['email'];
				$phone    = $info['phone'];
				$gender   = $info['gender'];
				$photo    = $info['file'];
			}*/
		if(isset($_POST['update']))
		{
			header("location:update_page.php");
		}
		if(isset($_POST['logout']))
		{
			include('exit.php');
		}

        if(isset($_POST['edit']))
        {
        	ob_start();
        	$flagFile=false; //initially flagFile is false;
        	$flagGender=false;
        	if(!empty($_FILES['fileToUpload']['name']))
        	{	
        		//echo '<h1><font color="red">Image Selected</font></h1>';
                $uploadPath = 'photos/';
	            $destination=$uploadPath.basename($_FILES['fileToUpload']['name']);
				$sizeInByte=$_FILES["fileToUpload"]["size"];
				$sizeInKB=$sizeInByte*0.001;
				$typeArray = array("jpeg","png","jpg"); //edit file types from here.. or add your extra file type
						if($sizeInByte!=null) //checking empty file or not
		                {
							if($sizeInKB>250) //checking file size is exited ? 
							{
								echo '<h1><font color="red">File Is Too Large</font></h1>';
							}
							else
							{
								$fileType=$_FILES['fileToUpload']['type'];
								$fileType=explode('/',$fileType);
								$fileType=$fileType[1];
								//var_dump($GLOBALS);
								foreach ($typeArray as $type) 
								{
									if($fileType==$type)
									{
										//echo "thses File Can Be Uploaded";
										$flagFile=true;
										break;
									}
								}
							if($flagFile)
							{
								echo "<pre>";
								$uploadPath = 'photos/';
								$sourceFile=$_FILES["fileToUpload"]["tmp_name"];
								$destination =$uploadPath.basename($_FILES['fileToUpload']['name']);


								if(move_uploaded_file($sourceFile, $destination))
								{
					                  //$destination = $_SESSION['fileToUpload']['name']; 
									echo '<h1><font color="lime">File Uploaded Successfully</font></h1>';
									
								}
								else //if error occurs in moving file from temp
								{
									$flagFile=false;
									echo '<h1><font color="red">File is Not Uploaded</font></h1>';

								}
							}
							else
							{
								echo '<h1><font color="red">Invalid Image Format</font></h1>';
							}
        				}

					}
			    }
			    else
			    {
			    	echo '<h1><font color="red">No Image Selected</font></h1>';
			    }


			    $udfullname = $_POST['udfull_name'];
				$udphone    = $_POST['udphone'];
				if(isset($_POST['udgender'])) //if gender selected
				{
					$udgender = $_POST['udgender'];
					if($flagFile) //file also selected
					{
						echo $destination;
						$query  ="UPDATE userinfo SET full_name = '$udfullname', phone = '$udphone', gender = '$udgender', file='$destination' WHERE user_name='".$_SESSION['login']['user_name']."'";
					}
					else //if no file selected
					{	
						$query  ="UPDATE userinfo SET full_name = '$udfullname', phone = '$udphone', gender = '$udgender' WHERE user_name='".$_SESSION['login']['user_name']."'";
					}
				}
		    	else //if not any gender selected
		    	{
		    		//$udgender = $_POST['udgender'];
					if($flagFile)
					{
						echo $destination;
						$query  ="UPDATE userinfo SET full_name = '$udfullname', phone = '$udphone', gender = NULL, file='$destination' WHERE user_name='".$_SESSION['login']['user_name']."'";
					}
					else
					{
			    		$query  ="UPDATE userinfo SET full_name = '$udfullname', phone = '$udphone', gender = NULL WHERE user_name='".$_SESSION['login']['user_name']."'";
					}
	                
		    	}
		    	$result = mysqli_query($con,$query);

		    	if($result)
		    	{
		    		echo "Updated Successfully!<br>";
		    		
                   if($_POST)
				    {
				        mail($to,$subject,$message,$header);
				        header('location:show.php');
				        ob_end_flush();
				    }		    		
		    	}
		    	//echo "<pre>";
		    	//var_dump($_FILES);
	       //header("location:update_page.php"); 
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
						  <h2><u>Update Information</u></h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-left wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>
				    <form action="" method="post" enctype="multipart/form-data">
				 	<input class="frm_cnt_br" type="file" name="fileToUpload"/></br>
				 	<br/><br/>				 						 	
				 	<xml style=color:Blue >Full Name :</xml>
				 	<input class="Text" type="text" value="<?PHP echo $fullname; ?>" name="udfull_name" size="19"/>
				 	<br/><br/>
				 	<xml style=color:Blue >Email :</xml>
				 	<input class="Text" type="text" value="<?PHP echo $email; ?>" name="email" size="19"/>
				 	<br/><br/>
				 	<xml style=color:Blue >Phone Number :</xml>
				 	<input class="Text" type="text" value="<?PHP echo $phone; ?>" name="udphone" size="19"/>
				 	<br/><br/>					 	
				 	<input type="radio" name="udgender" value="male" />
				 	<xml style=color:Blue >Male </xml>
				 	<br/>
                    <input type="radio" name="udgender" value="female" />
				 	<xml style=color:Blue >Female </xml>
				 	<br/>
                    <input  type="radio" name="udgender" value="other" />
                    <xml style=color:Blue >Other </xml>
                    <br/><br/>                      
					<input type="submit" name="edit" value="DONE">	
					<br/><br/>    
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