<?php
session_start();
 
if(!isset($_SESSION['emp']))
{
	header("Location: emplogin.php");
}
else if(isset($_SESSION['emp'])!="")
{
	header("Location: emphome.php");
}
 
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['emp']);
	header("Location: emplogin.php");
}
?>