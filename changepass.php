<?php
session_start();
require 'connection.php';
$username=$_SESSION['username'];
$password=$_SESSION['password'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<script>
		function check_Password(){
				var pass=document.forms["myForm"]["changepass"].value;
				var repass=document.forms["myForm"]["rechangepassword"].value;
				if(pass!=repass){
					alert("Passwords do not match!Please Re-Enter your Password");
					return false;	
				}
			}
	</script>
</head>
<body>
<form name="myForm" action="#" method="POST" >
	<table align="center">
		<tr><td>Change Password:</td><td><input type="password" id="changepass" name="changepass"></td></tr>
		<tr><td>Re-Enter Password:</td><td><input type="password" name="rechangepass" id="rechangepass" onblur="check_Password()"></td></tr>
		<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
	</table>
</form>
<?php	
if(isset($_POST['submit'])){


	$pass=md5(mysqli_real_escape_string($conn,$_POST['changepass']));
	
	if($password==$pass){
		echo "You Have Entered An Old Password! Please Enter A New Password! ";
		
	}
	else{
	$sql="UPDATE user SET password='$pass' WHERE username='$username'";
	if(mysqli_query($conn, $sql)){
   				echo "Your Password Has Been Updated!";
   				session_destroy();
   				?>
   				Re-Login:</label><a href="login.php"><input type="submit" value="submit" name="submit"></a>
   				
 <?php  			}
   		else{
   				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}

	}
}
 ?>
 </body>
 </html>







</form>
</body>
</html>