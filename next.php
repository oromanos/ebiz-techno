<?php
session_start();
?>
<html>
<head>
<title>Report</title>

</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">enjoy your day</td>
</tr>
<tr class="tablerow">
<td>
<?php
	if($_SESSION["username"]) {
?>

	<a href="report.php" title='previous'>previous </br>
 	 <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body>
</html>

