<?php
	session_start();
	$username=$_SESSION['username'];     
    echo'welcome :'. $username.'<br>';
    //$sql= "SELECT * from user where username= $username";
    echo $sql;
    require 'conn.php';
    $password = md5(mysqli_real_escape_string($conn, $_POST['oldpassword']));
    $newpassword = md5(mysqli_real_escape_string($conn, $_POST['renewpassword']));
	/*echo $password;
	echo"ZJH     ";
	echo $newpassword;    
	*/$sql="SELECT username FROM user WHERE password = '$password'";
    $result = $conn->query($sql);
	$result->num_rows;
	if($result->num_rows!==0) {
         
         //echo $newpassword;
        $sqlq= "UPDATE user SET password = '$newpassword' Where password = '$password'";
         $conn->query($sqlq);
         if($conn->query($sqlq))
         {
         	?>
         	<html>
			<body><br><br><br>
			<h1>
				<h1> Password Changed Successfully <h1>. 
				<a href="login.php"> login here with new password.. </a>
			</h1>
			</body>
			</html>
		<?php
         	session_destroy();
         }

     }
     else{
     	echo '<h1> Incorrect Password</h1>';
     }
	       

?>