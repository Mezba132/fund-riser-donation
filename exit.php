<?php
include'check-session.php';

include('config.php');

$sql = "select * from userinfo";

$records = mysqli_query($con,$sql);


   session_destroy();
   header("location:index.php");


?>