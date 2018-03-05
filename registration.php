<?php
    include('config.php');
     if(isset($_POST['registrationform']))
     {
     	ob_start(); 
		try
		{
			 $name                = $_POST['full_name'];
			 $user_name           = $_POST['user_name'];
			 $email               = $_POST['email'];
			 $password            = $_POST['password'];
			 $confirm_password    = $_POST['confirm_password'];


			 if(empty($name))
			 {
			 	throw new Exception("Name Required");			 	
			 }

			$fname=preg_match("/^[a-zA-Z ]*$/", $name);
		     
		    if(!$fname)
            {
            	throw new Exception("Only Letters are allowed");
            	
	        }
		    //username validation

		    if(empty($user_name))
		    {
		    	throw new Exception("User Name");
		    	
		    }

		    $query ="select * from userinfo where user_name='$user_name'";

		    if($pp=mysqli_query($con,$query))
		    {

		            if(mysqli_num_rows($pp) > 0)
		            {
		                throw new Exception("username already exists"); 
		            }
		    }
		    if(empty($email))
		    {
		    	throw new Exception("Mail Required");
		    	
		    }
		    if(filter_var($email, FILTER_VALIDATE_EMAIL) != true)
		    {
		    	throw new Exception("Email Not valid");
		    	
		    }
            //password validation
            if(empty($password)) 
            {
            	throw new Exception("Password Required");
            	
            } 

            $uppercase=preg_match('@[A-Z]@',$password);
            $lowercase=preg_match('@[a-z]@',$password);
            $numb=preg_match('@[0-9]@',$password);

            if(!$uppercase && $lowercase)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
                        if($uppercase && !$lowercase)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
                        if($lowercase && !$numb)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
                        if($uppercase && !$numb)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
                                    if(!$uppercase && $numb)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
                                    if(!$lowercase && !$numb)
            {
				throw new Exception("Include one Uppercase,lowercase and number");            	
            }
            if(strlen($password) <! 7)
            {
            	throw new Exception("Must Be 8 Character");
            	
            }
            if(empty($confirm_password))
            {
            	throw new Exception("Retype Your Password");
            	
            }
			if($confirm_password != $password)
			{
				throw new Exception("Password Not Match");
				
			}
			else
			{

				$result = "INSERT INTO userinfo(full_name,user_name,email,password,confirm_password) VALUES ('$_POST[full_name]','$_POST[user_name]','$_POST[email]','$_POST[password]','$_POST[confirm_password]')";
				
				$query = mysqli_query($con,$result);
                echo '<script language="javascript">';
				echo 'alert("successfull")';
				echo '</script>';
															
				if($result)
				{
		             if($_POST)
				    {
				        mail($to,$subject,$message,$header);
				        header('location:login.php?id=register');
				        ob_end_flush();
				    }

				}
				else
				{
	                echo '<script language="javascript">';
					echo 'alert("!! Unsuccessfull")';
					echo '</script>';					
				}
			}
		}

	catch(Exception $e){
	$error_message=$e->getMessage(); 
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

			<title>REGISTRATION</title>
			
			<!--[css]-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="style.css" rel="stylesheet">
			<link href="css/responsive.css" rel="stylesheet">
			<link href="css/login.css" rel="stylesheet">
			<link rel="stylesheet" href="css/animate.css">
			 <!--[css]-->
	        <script src="script.js" type="text/javascript"></script>			
			 
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
								   <li><a href="index.php">HOME</a></li>
								</ul>
							</div>
							<div class="col-md-6  col-sm-6 social_links text-center wow fadeInDown animated" data-wow-delay=".5s">
								<ul>
								</ul>
							</div>
							<div class="col-md-3 col-xs-12  col-sm-3 header_top_area_right text-center wow fadeInDown animated" data-wow-delay=".5s">
								<ul>
									<li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
									<li><a href="login.php?id=register">SIGN IN</a></li>
								</ul>
							</div>
						</div> 
					</div>
				</div>
			</div>
            <!--[HEADER TOP ]-->
		
		
		
		
		
		
		  
		    <!--[contact]-->

			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>Register</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
						 <form action="" method="POST">
							<input type="text" class="form_controle" name="full_name" value="<?php echo isset($_POST['full_name']) ? $_POST['full_name']:''; ?>" placeholder="Full Name">
							<input type="text" class="form_controle" name="user_name" value="<?php echo isset($_POST['user_name']) ? $_POST['user_name']:''; ?>" placeholder="User Name">
							<input type="text" class="form_controle" name="email"     value="<?php echo isset($_POST['email']) ? $_POST['email']:''; ?>"  placeholder="Email">
							<input type="password"class="form_controle" name="password" placeholder="Password">
							<input type="password"class="form_controle" name="confirm_password" placeholder="Conform Password">
							<input type="submit"class="form_controle_btn" name="registrationform" value="Confirm">
						 </form>
					 </div>
				  </div>
				</div>
			  </div>
			</div>

		<!--[contact]-->
		   

			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--[BOOTSTARP SOURCE PLUGIN]-->	
			<script src="js/bootstrap.min.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.easing.min.js"></script><!--[SCROLLING ANIMATION. OPEN SOURCE PLUGIN]-->	
			<script src="js/main.js"></script><!--[BOOTSTARP OPEN SOURCE PLUGIN]-->
			<script src="js/jquery.sticky.js"></script><!--[STICK THE MUNU AREA. OPEN SOURCE PLUGIN]-->	
			<script src="js/jquery.scrolly.js"></script><!--[SCROLL SPIE .SOURCE PLUGIN]-->	
			<script src="js/wow.min.js"></script> <!--[ANIMATION WOW JS .OPEN SOURCE PLUGIN]-->	
		 
        
    </body>
</html>