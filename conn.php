<?php
	$servername = '192.168.1.222';
    $username = 'root';
    $password = '';
    $dbname = 'ebiz-techno';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
       }
 ?>
    