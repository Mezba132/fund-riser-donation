<!DOCTYPE html>
<html lang="en">
    
	<head>
			<title>Display Information</title>
    </head>
    
	
	
	<body>
		   <center>
		   	
				<?php
				if(isset($_REQUEST['id']))
				        {
				          if(!empty($_REQUEST['id']))
				          {
				            $id=$_REQUEST['id'];

				            include('../config.php');
				            //echo $username;
				            $query="SELECT * FROM fundraiser where id='".$_REQUEST['id']."'";
				            $result=mysqli_query($con,$query);
				            if($result)
				            {
				            	if($rowdata=mysqli_fetch_assoc($result))
				            	{
				            		$pic     =$rowdata['file'];
									$title   =$rowdata['title'];
									$receiver=$rowdata['description'];
									$goal    =$rowdata['goal'];
									echo 
										"<center>
								     <div class='tranding'>
								     <div class='tranding_image'>
									     <img src=$pic width='250'>
									 </div>
									 <div class='tranding_title'>
									    $title
									 </div>
									 <div class='tranding_title'>
									 $receiver
									 </div>
								 	</div>
								 	<div class='tranding_title'>
									 AMOUNT : $goal
									 </div>
								 	</div></center>
										";
				            	}
				              //header("location:contact.php");
				              //echo "DELETED ";
				            }
				            else
				            {
				              echo "FALSE";
				            }
				            mysqli_close($con);
				            //echo"<pre>";
				            //var_dump($_REQUEST);
				            //
				          }
				        echo "
				        <a href='fund_info.php' class='btn_filled' >BACK</a>";
				        }				        
				?>
		   </center>

        
    </body>
</html>



                      





