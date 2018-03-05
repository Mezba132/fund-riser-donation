<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:admin_login.php");
}
?>