<?php
include('check-session.php');
//session_start();
?>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<center>
    <table border="2">
     <thead>
	    <tr>
	      <th>Full Name</th>
          <th>User Name</th>
	      <th>Email</th>
	      <th>Phone</th>
        </tr>
    </thead>

 <tbody>
<?php
        include ('../config.php');

        $query  = "select * from userinfo";

        $result = mysqli_query($con,$query);

        while ($row = mysqli_fetch_assoc($result)) 
        {
        	echo "<tr><td>{$row['full_name']}</td><td>{$row['user_name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td></tr>";
        }

?>
 </tbody>
</table>
          <a href="category.php">Back</a>
</center>
</body>
</html>