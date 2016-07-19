
<?php
session_start();
//echo "111";
 //print_r($_POST);
if($_POST['submit'] != '') {
 //print_r($_POST);
 //$_SESSION["id"] = "44";
 $conn = mysql_connect("192.168.1.222","root","");
 mysql_select_db("ebiz-techno",$conn);
 $result = mysql_query("SELECT password from user WHERE id='" . $_SESSION["id"] . "'");
 $row=mysql_fetch_array($result);
	if(md5($_POST["currentpassword"]) == $row["password"]) {
       if($_POST["newpassword"] == $_POST["confirmpassword"]){
		  mysql_query("UPDATE user set password='" . md5($_POST["newpassword"]) . "' WHERE id='" . $_SESSION["id"] . "'");
		  echo "Password Changed";
	    } else echo "Current Password is not correct";
    }
 }
 else
 	echo "incorrect password!!try again";
?>



