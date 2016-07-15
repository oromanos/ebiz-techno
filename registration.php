<?php

define('DB_HOST', '192.168.1.222');
define('DB_NAME', 'ebiz-techno');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname=$_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
		$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)=== false){
		  $_POST['email'];
		 }
		else{
		   echo ("$email is not a valid email");
		 }
	$password =  md5($_POST['password']);
    $dateval=explode('-',$_POST['dob']);
    $date=$dateval[2]."-".$dateval[1]."-".$dateval[0];
	$query = "INSERT INTO user (fullname,username,email,password,date) VALUES ('$fullname','$username','$email','$password','$date')";
	$data = mysql_query ($query)or die(mysql_error());
		if($data)
	 	 {
	       echo "YOUR REGISTRATION IS COMPLETED...";

	     }
}

function SignUp()
{
 if(!empty($_POST['username'])) {
     $query = mysql_query("SELECT * FROM user WHERE username='" . $_POST["username"]  ."' and password = '". md5($_POST["password"])."'") or die(mysql_error());
     if(!$row = mysql_fetch_array($query))
	  {
		newuser();
	  }
	 else
	  {
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	  }
  }
}
if($_POST['submit']!='')
 {
	SignUp();
 }
?>



