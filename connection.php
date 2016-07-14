<?php
		/*mysql_connect('192.168.1.222','root','') or die(mysql_error());
        mysql_select_db('ebiz-techno') or die(mysql_error());*/
        $servername='192.168.1.222';
        $username='root';
        $password='';
        $dbname='ebiz-techno';

        $conn=new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
        	die("Connection Failed".$conn->connect_error);
        }
        //$conn->close();


?>