<?php
  include('check-session.php');
  include('../config.php');
  if(isset($_POST['logout']))
  {
  	   session_destroy();
      // header("location:admin_login.php");
  	   header("location:../index.php");
  }
?>
<html>
<head>
	<title>Catagory</title>
	</html>
	<body>
		<center>
			<div class="log_in_area">
			  <div class="container-fluid page_aliment">
				<div class="row  text-center wow fadeInDown " data-wow-delay="0.5s">
					   <div class="col-md-12 login"> 
						  <h2>All Information</h2>
					   </div>
				</div>
				<div class="row">
				  <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown animated" data-wow-delay="0.5s">
             	 <div class='single_content_item'>
				 <div class='contenttext'>
				 	<a href="">Donor</a>
				 	<br/><br/>
				 	<a href="user.php">User</a>
				 	<br/><br/>
				 	<a href="contact.php">Contact</a>
				 	<br/><br/>
				 	<a href="fund_info.php">ALL INFORMATION </a>	
					  </div>
				 </div>
				  </div>
				</div>
			  </div>
			</div>
		</br></br>
		<form method="post">
			<input type="submit"class="form_controle_btn" name="logout" value="log-out">
		</form>	
		</center>
	</body>
</html>