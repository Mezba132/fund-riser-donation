<?php

if(isset($_REQUEST['id']))
        {
          if(!empty($_REQUEST['id']))
          {
            $id=$_REQUEST['id'];
            include 'config.php';
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
					    <a href='#'>$title</a>
					 </div>
					 <div class='tranding_title'>
					 <a href='#'>$receiver</a>
					 </div>
				 	</div>
				 	<div class='tranding_title'>
					 <a href='#'>$goal</a>
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
        }

			
			/*$query="SELECT * FROM fundraiser where id='".$SESSION['id']."'";
			$result=mysqli_query($con,$query);
			while($rowdata=mysqli_fetch_assoc($result))
			{
				$pic     =$rowdata['file'];
				$title   =$rowdata['title'];
				$receiver=$rowdata['description'];
				$goal    =$rowdata['goal'];
				echo 
				"
		     <div class='tranding'>
		     <div class='tranding_image'>
			     <img src=$pic width='250'>
			 </div>
			 <div class='tranding_title'>
			    <a href='#'>$title</a>
			 </div>
			 <div class='tranding_title'>
			 <a href='#'>$receiver</a>
			 </div>
		 	</div>
		 	<div class='tranding_title'>
			 <a href='#'>$goal</a>
			 </div>
		 	</div>
				";
				//echo "<pre>";
				//var_dump($rowdata);
			}
			mysqli_close($con); */
?>