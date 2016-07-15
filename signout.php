<?php
session_start();
if($_SESSION['username']!=''){
	header('location:login.php');
	echo "<h1>You have signed out!</h1>";
	die();

}

?>
