<?php
ob_start();
session_start();
?>
<html>
<head>
<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
  </head>
<body>
<h1 align="center">Please Re-Enter Password</h1>
<form action='#' method='post'> 
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='username' value="<?php echo $_SESSION['username']; ?>" /></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/>
</td></tr>
</table>

</form>

</body>
</html>
<?php
if(isset($_POST['submit'])){
   /*$servername = '192.168.1.222';
   $username = 'root';
   $password = '';
   $dbname = 'ebiz-techno';

   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);*/
   require 'connection.php';    
   //}
   //$username=$_POST['username'];
   //$password=$_POST['password'];

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

   if($username!='' && $password!=''){
       //$query=mysql_query("select * from user where username='".$username."' and password='".$password."'") or die(mysql_error());
       $sql= "SELECT * FROM user WHERE username = '$username' and password='$password'";
       $result = $conn->query($sql);
       //$res=mysql_fetch_row($query);

$row=$result->num_rows;
//print_r($result);
//echo $row;
//echo '<br>num rows: ',$result->num_rows,'<br>';
       if($row!==0){
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    header('location:changepass.php');
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
