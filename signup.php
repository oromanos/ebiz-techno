<?php
session_start();
if($_POST['submit']!=''){
$conn = mysql_connect("192.168.1.222","root","");
mysql_select_db("ebiz-techno",$conn);
email=$_POST["email"];
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
if($email!='')

?>

