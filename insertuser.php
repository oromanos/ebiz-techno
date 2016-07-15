<?php
require 'conn.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$fname = mysqli_real_escape_string($conn, $_POST['fullname']);
$password = md5(mysqli_real_escape_string($conn, $_POST['password']));
$email = mysqli_real_escape_string($conn, $_POST['email']);

$dateval=explode('-',$_POST['dob']);


$date=$dateval[2]."-".$dateval[1]."-".$dateval[0];


$sql = "INSERT INTO user (username,fullname,password,email,date) VALUES ('$username', '$fname', '$password','$email', '$date')";
if(mysqli_query($conn, $sql)){
?>
	<html>
		<body><br><br><br>
			<h1>
				Thank you for sign up. 
				<a href="login.php"> login here.. </a>
			</h1>
		</body>
	</html>
<?php	
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>