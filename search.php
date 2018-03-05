<html>
<body>
    <center>
	
		<?php
				include('config.php');
				if(isset($_POST['search']))
				{
					$searchq = $_POST['search'];
					$searchq = preg_replace("#[^0-9A-Za-z]#i", "", "$searchq");

					$sql ="select * from fundraiser where type like '%$searchq%'";
					$result = mysqli_query($con, $sql);
					$count = mysqli_num_rows($result);

					if($count == 0)
					{
						echo "No search result";
					}
					else
					{
						while($row = mysqli_fetch_assoc($result))
						{
							$ID   =$row['id'];
							$img_url=$row['file'];
							$username = $row['user_name'];
							$Title = $row['title'];
							$link="Trending.php?id=$ID";
							$img_url=str_replace(' ', '%20', $img_url);
							echo "<img src=$img_url width='200'>.<br>";
							echo "<a href=$link>$Title</a><br>";			
							echo "GOAL : ".$row['goal']." <br>";
							echo "-----------------------------<br>";

			   			}
					}
				}
		?>
</center>
</body>
</html>