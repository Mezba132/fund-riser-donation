<?php
include('check-session.php');
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
	      <th>Name</th>
	      <th>Email</th>
	      <th>Message</th>
          <th>Remove</th>          
        </tr>
    </thead>

 <tbody>
<?php
        include ('../config.php');

        $query  = "select * from contact";
        $result = mysqli_query($con,$query);
        
        while ($row = mysqli_fetch_assoc($result)) 
        {
          $email=$row['id'];
          $del="contact.php?delete=$email";
        	echo "<tr>
          <td>{$row['name']}</td>
          <td>{$row['email']}</td>
          <td>{$row['message']}</td>
          <td><a href=$del>Delete</a></td>
          </tr>";
          //echo $username."<br>";
        }
        if(isset($_REQUEST['delete']))
        {
          if(!empty($_REQUEST['delete']))
          {
            $email=$_REQUEST['delete'];
            //echo $username;
            $query="DELETE FROM contact WHERE id='".$email."'";
            $result=mysqli_query($con,$query);
            if($result)
            {
              header("location:contact.php");
              //echo "DELETED ";
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
        //header("location:contact.php");

?>
 </tbody>
</table>
          <a href="category.php">Back</a>
</center>
</body>
</html>