<?php
  include('check-session.php');
  include('../config.php');
  if(isset($_POST['logout']))
  {
  	   session_destroy();
      // header("location:admin_login.php");
  	   header("location:../");
  }
?>
<html>
<head>
	<title>FUNDRAISE INFORMATION</title>
</head>
<body>
                <center>   
                    <form method="post">
			        <input type="submit"class="form_controle_btn" name="logout" value="log-out">
		            </form>	
		        </center>    
				 	<table border="2" cellspacing="5">
				 		<tr >
				 			<td><h4><b>Image</h4></td>
				 			<td><h4><b>Title</h4></td>
				 			<td><h4><b>Type</h4></td>
				 			<td><h4><b>Description</h4></td>
				 			<td><h4><b>Goal</h4></td>
				 			<td><h4><b>Remove</h4></td>
				 			<td><h4><b>View Information</h4></td>
				 		</tr>

				 	<?php
                        //include'check-session.php';
						//session_start();
						include('../config.php');
						if(isset($_SESSION['login']['user_name']))
						{

							$sql = "select * from fundraiser";

							if($records = mysqli_query($con,$sql))
							{
								//echo "working";
							}
							else
							{
								//echo "not working";
							}
							//echo "<pre>";
							//var_dump($_SESSION);

							while($row = mysqli_fetch_assoc($records))
							 {
							 	$type    = $row['type'];
							 	$title   = $row['title'];
							 	$des     = $row['description'];
							 	$file    = $row['file'];
							 	$goal    = $row['goal'];

							 	$ID=$row['id'];
                                $del="display.php?delete=$ID";
                                $link="page_view.php?id=$ID";
                                $file=str_replace(' ', '%20', $file);

							 	echo "
							 	<tr>
							 	<td><img src=$file width=150 height=150></td>
							 	<td>$title</td>
							 	<td>$type</td>
							 	<td>$des</td>
							 	<td>$goal</td>
							 	<td><a href=$del>Delete</a></td>
							 	<td><a href=$link>VIEW</a></td>
							 	</tr>							 	
							 			";
							 }
						}

			        if(isset($_REQUEST['delete']))
			        {
			          if(!empty($_REQUEST['delete']))
			          {
			            $ID=$_REQUEST['delete'];
			            //echo $username;
			            $query="DELETE FROM fundraiser WHERE id='".$ID."'";
			            $result=mysqli_query($con,$query);
			            if($result)
			            {
			              header("location:display.php");
			              echo "DELETED ";
			            }
			            else
			            {
			              echo "FALSE";
			            }
			            //echo"<pre>";
			            //var_dump($_REQUEST);
			            //
			          }
			        }

		?>	
</body>
</html>