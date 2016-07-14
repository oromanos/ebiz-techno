<?php
session_start();
?>
<?php
if($_SESSION['username']==''){
    header("Location:eighthlogin.php");
    die();
}else{
?>
<h1>REPORT</h1>
<?php echo $_SESSION["username"]; ?>. Click here to <a href="logout1.php" title="Logout">Logout.</a>
<?php
}
?>
