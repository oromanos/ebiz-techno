<?php
ob_start();
session_start();
/*echo"abc";
header ('location:welcome.php');
*/
if(isset($_POST['submit'])){
    /*$servername = '192.168.1.222';
    $username = 'root';
    $password = '';
    $dbname = 'ebiz-techno';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);*/
    require 'conn.php';    
    //} 
    //$username=$_POST['username'];
    //$password=$_POST['password'];

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
 
    if($username!='' && $password!=''){
        //$query=mysql_query("select * from user where username='".$username."' and password='".$password."'") or die(mysql_error());
        $sql= "SELECT 1 FROM user WHERE username = '$username' and password='$password'";
        $result = $conn->query($sql);
        //$res=mysql_fetch_row($query);

		$row=$result->num_rows;
		
        if($row!==0){
    		$_SESSION['username']=$username;
    		header('location:try.php');
            die();
		/*$fp = fopen('abc.txt', 'w');
		fwrite($fp, 'i should get written');
		fclose($fp);*/
   		} else {
    		echo'You entered username or password is incorrect';
   		}
 	}else{
  		echo'';
 	}
}

?>