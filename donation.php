<!DOCTYPE html>
<html lang="en">
    
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>DONATE</title>
			
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
                                    <li><a href="index.php">HOME</a></li>
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
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>DONATE PEOPLE</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
					 <div class="form_bg">
						 <form action="" method="POST">
							<input type="text" class="form_controle" name="amount" placeholder="Set Amount">	
							<input type="text" class="form_controle" name="fname" placeholder="First Name">	
							<input type="text" class="form_controle" name="lname" placeholder="Last Name">	
							<input type="text" class="form_controle" name="country" placeholder="Country">	
							<input type="text" class="form_controle" name="city" placeholder="City">
							<input type="text" class="form_controle" name="zcode" placeholder="Zip Code">
							<input type="text" class="form_controle" name="cnumber" placeholder="Card Number">
							<input type="text" class="form_controle" name="pin" placeholder="PIN">					
							<input type="submit"class="form_controle_btn" name="confirm" value="DONE">	
						</div>
						 </form>
					 </div>
				  </div>
				</div>
			  </div>
			</div>



		<!--[login]-->
		   
		
<?php
        include ('config.php');
		if(isset($_POST['confirm']))
		{
			$Amount     = $_POST['amount'];
			$FirstName  = $_POST['fname'];
			$LastName   = $_POST['lname'];
			$Country    = $_POST['country'];
			$City       = $_POST['city'];
			$ZipCode    = $_POST['zcode'];
			$CardNumber = $_POST['cnumber'];
			$Pin        = $_POST['pin'];

           $query ="INSERT INTO donor VALUES('".$Amount."','".$FirstName."','".$LastName."','".$Country."','".$City."','".$ZipCode."','".$CardNumber."','".$Pin."')";
           $result  = mysqli_query($con,$query);

           if($result)
           {
               echo "DONE";
           }
           else
           {
               echo "query problem";
           }


			if (isset($_REQUEST['id'])) 
			{
				if(!empty($_REQUEST['id']))
				{
					if($_SERVER['REQUEST_METHOD']=="POST")
					{
						if(!empty($_POST['amount']))
						{
							//include 'config.php';
							$id=$_REQUEST['id'];
							$query="SELECT * FROM fundraiser where id='".$_REQUEST['id']."'";
							$result=mysqli_query($con,$query);
							if($result)
							{
								if($row=mysqli_fetch_assoc($result))
								{
									$goal=(int)$row['goal'];
									$Amount=(int)$_POST['amount'];
									if($Amount>$goal)
									{
										echo "Please Help the developrs";
									}
									else
									{
										$goal-=$Amount;
										echo $goal;
										$update_goal = $goal;
										$update_query ="UPDATE fundraiser SET goal = '$update_goal' WHERE id='".$_REQUEST['id']."'";
										$udresult = mysqli_query($con,$update_query);
										if($udresult)
										{
										  echo "update successfully";	
										}
										else
										{
											echo "update not done";
										}
									}
									//echo "<pre>";
									//var_dump($sum);
								}
							}
						}
						else
						{
							echo "empty field";
						}
						//echo "do db op";

					}
				}
				else
				{
					die('empty peram');
				}
				# code...
			}
			else
			{
				die('invalid op');
			}	    	
		}
?>
		
		
		
		
		
		
		
		
		 
		
		
		
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