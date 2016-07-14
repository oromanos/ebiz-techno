<!DOCTYPE html>
<html>
<head>

<body>
<h1>REPORT</h1>

<script>
document.getElementById("demo").innerHTML = Date();
</script>
<?php
$servername = '192.168.1.222';
$username = 'root';
$password = '';
$dbname = 'shreya';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, email, date FROM tbl_test ORDER BY fname ASC limit 5,10" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
   while($row = $result->fetch_assoc()) {
       echo   $row["fname"]. " " . $row["email"]. " " . $row["date"]. "<br>";
   }
} else {
   echo "0 results";
}


$conn->close();
?>
<br><br><br><br><br><br><br><br><br>
<div align="center">
<a href="ninth.php"><input type="submit" value="Previous"></a>
  <a href="page3.php"><input type="submit" value="next"></a>
    <a href="logout1.php"><input type="submit" value="logout"></a>
</div>
</body>
</html>
