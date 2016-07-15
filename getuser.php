<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

			if(isSet($_GET['q'])) {
					$q = $_GET['q'];
					require 'connection.php';


					$q = mysqli_real_escape_string($conn, $_GET['q']);

					$sql="SELECT username FROM user WHERE username = '$q'";
					$result = $conn->query($sql);

					$result->num_rows;

					if($result->num_rows==0) {
			    		echo 'OK';
			    	}

				    else {
				   
		    				echo '<font color="red">The nickname <strong>'.$q.'</strong>'.' is already in use.</font>';
						}

}
?>
