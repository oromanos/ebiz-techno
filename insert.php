<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
require 'connection.php';

$fullnameError ="";
$usernameError="";
$emailError ="";
$passError ="";
$repassError ="";
///$dobError="";
$valid=true;

if(isset($_POST['submit']))
{
	
	
	if (empty($_POST['fullname'])) 
		{
			//$fullnameError = "Name is required";
			
			$_SESSION['fullnameError']="Full Name is required.";

			$valid=false;

		} 
	else 
		{
			
			$fullnameError = test_input($_POST['fullname']);
					
					
				// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$_POST['fullname']))
			{
						
				$_SESSION['fullnameError']="Only letters and white space allowed";
				$valid=false;
			}
		
		}


		if (empty($_POST['username'])) 
		{
			$usernameError = "User Name is required";
			$_SESSION['usernameError']=$usernameError;
			$valid=false;

		} 
		else 
		{
			$usernameError = test_input($_POST['username']);
								
								// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$_POST['username']))
			{

				$usernameError = "Only letters and white space allowed";
				$_SESSION['usernameError']=$usernameError;
				$valid=false;

								
						
			}
		}

		if (empty($_POST['email'])) 
		{
			$emailError = "Email is required";
			$_SESSION['emailError']=$emailError;
			$valid=false;	

		} 
		else 
		{
			$email = test_input($_POST['email']);
			// check if e-mail address syntax is valid or not
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email'])) 
				{
					$emailError = "Invalid email format";
					$_SESSION['emailError']=$emailError;
					$valid=false;
				}
		}

		if (empty($_POST['password']))
		{
			$passError = "Password is required";
			$_SESSION['passError']=$passError;
			$valid=false;
							    //echo 'mm',(int)$valid;
		} 



			
		if((int)$valid==0){
				
				header('Location:signupnew.php');
				exit();
			
			}

			
}
function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}

		
		$fname=(mysqli_real_escape_string($conn,$_POST['fullname']));
		$uname=(mysqli_real_escape_string($conn,$_POST['username']));
		$email=(mysqli_real_escape_string($conn,$_POST['email']));
		$pass=md5(mysqli_real_escape_string($conn,$_POST['password']));
		$dateval=explode('-',$_POST['dob']);

		$date=$dateval[2]."-".$dateval[1]."-".$dateval[0];


		$sql = "INSERT INTO user (username,fullname, password,email,date) VALUES ( '$uname','$fname', '$pass','$email','$date')";
		if(mysqli_query($conn, $sql)){
   				echo "Your Information has been added!Thanks For signing up!";
?>
			<!DOCTYPE html>
			<html>
			head>
					<title></title>
			</head>
			<body>
					<br><br><br><br>
					Want to Login?:<a href="login.php"> <input type="submit" value="Sign in"></a>
			</body>
			</html>
<?php
			} else{
   				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
			/*$sql = "INSERT INTO user (username,fullname, password,email,date) VALUES ( '$uname','$fname', '$pass','$email','$date')";
if(mysqli_query($link, $sql)){
   echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);*/
				
				mysqli_close($conn);



?>








