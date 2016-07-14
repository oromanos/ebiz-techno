
<?php
session_start();
if($_POST['submit'] !=''){
   	$conn = mysql_connect("192.168.1.222","root","");
	mysql_select_db("ebiz-techno",$conn);
	$result = mysql_query("SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". md5($_POST["password"])."'");
	$row  = mysql_fetch_array($result);
	if($row["username"]!='') {
		$_SESSION["username"] = $row["username"];
		header("Location:report.php");
		die();
	} else {
		echo "Invalid Username or Password!";
	}
}
?>