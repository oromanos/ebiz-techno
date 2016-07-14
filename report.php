<?php
session_start();
?>
<html>
<head>
<title>Logged In</title>

</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">Report</td>
</tr>
<tr class="tablerow">
<td>
<?php
	if($_SESSION["username"]) {
?>
Welcome <?php echo $_SESSION["username"]; ?>.
	<a href="next.php" title='next'>next
 
<?php
}
?>
</td>
</tr>
</body>
</html>