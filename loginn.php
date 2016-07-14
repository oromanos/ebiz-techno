<?php
session_start();
$message="";
print_r($_POST);
if($_POST['submit'] != '') {

	$conn = mysql_connect("192.168.1.222","root","");
	mysql_select_db("ebiz-techno",$conn);
	$result = mysql_query("SELECT * FROM newtable WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
$password=md5($password);
	$row  = mysql_fetch_array($result);
print_r($row);
	if($row['username'] != '') {
		$_SESSION["username"] = $row['username'];
		header("Location:dashboard.php");
		die();
	} else {
		$message = "Invalid Username or Password!";
	}
}
	

?>