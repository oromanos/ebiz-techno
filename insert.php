<?php

				/*$link = mysqli_connect("192.168.1.222", "root", "", "ebiz-techno");
				print_r($_POST);

				if($link === false){
   				die("ERROR: Could not connect. " . mysqli_connect_error());
		}*/
		require 'connection.php';
		$fname=mysqli_real_escape_string($conn,$_POST['fullname']);
		$uname=mysqli_real_escape_string($conn,$_POST['username']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
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
