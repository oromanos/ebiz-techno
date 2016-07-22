<?php
session_start();
//print_r($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
      <title>jQuery UI Datepicker functionality</title>
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<title>Sign Up</title>
	
	<script>
	
		function showUser(str){
				if(str.length==0){
					document.getElementById("txtUser").innerHTML="Please Enter Username!";
					return;
				}
				else{
					var xmlhttp = new XMLHttpRequest();
        			xmlhttp.onreadystatechange = function() {
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                			document.getElementById("txtUser").innerHTML = xmlhttp.responseText;
            			}
        			}
        			xmlhttp.open("POST", "getuser.php?q=" + str, true);//we cannot use www.getuser.php?q
        			xmlhttp.send();
				}

		}
		function check_Password(){
				var pass=document.forms["myForm"]["password"].value;
				var repass=document.forms["myForm"]["repassword"].value;
				if(pass!=repass){
					alert("Passwords do not match!Please Re-Enter your Password");
					return false;	
				}
			}
		function validateForm(){
			var fn=document.forms["myForm"]["fullname"].value;
			var uname=document.forms["myForm"]["username"].value;
			var mail=document.forms["myForm"]["email"].value;
			var pass=document.forms["myForm"]["password"].value;
			var Dob=document.forms["myForm"]["dob"].value;
			if(fn == null || fn == '' ){
				alert("Full Name must be filled out");
				return false;
			}
			if(uname == null || uname == '' ){
				alert("User Name must be filled out");
				return false;
			}
			if(pass == null || pass == '' ){
				alert("Password must be filled out");
				return false;
			}
			/*if(Dob == null || Dob == '' ){
				alert("Date of Birth must be filled out");
				return false;
			}*/
			if(mail == null || mail == '' ){
				alert("Email must be filled out");
				return false;
			}
			var atpos = mail.indexOf("@");
    		var dotpos = mail.lastIndexOf(".");
    		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length) {
        			alert("Not a valid e-mail address");
        			return false;
    			}
    		}



		
		
		$(function() {
            $("#dob").datepicker({
            	changeMonth: true,
			        changeYear: true,
			        yearRange: "-150:+0",
			        dateFormat:"dd-mm-yy"
            });
           
            $( "#dob" ).datepicker("show");
         });
	</script>
</head>
<body bgcolor="beige">	
		<h1>Sign Up Page</h1>
		

		<hr>
		<br>
		<form name="myForm" action="insert.php" onsubmit="return validateForm()" method="post">
		<h2 align="center">Form</h2>
		<div align="center">* required field</div>
		<table align="center">

		<tr><td>Full Name:</td><td><input  name="fullname" type="text" id="fullname"></td><td><span >* <?php echo $_SESSION['fullnameError'];?></span><br></td></tr>
			
		<tr><td>User Name:</td><td><input  name="username" type="text" id="username" onblur="showUser(this.value)"></td><td><span >* <?php echo $_SESSION['usernameError'] ;?></span><br></td></tr>
		
		<tr><td>E-mail:</td><td><input  name="email" type="text" id="email" ></td><td><span >* <?php echo $_SESSION['emailError'];?></span><br></td></tr>
			
		<tr><td>Password:</td><td><input  name="password" type="password" id="password" ></td><td><span >*<?php echo $_SESSION['passError'];?></span><br></td></tr>
			
		<tr><td>Re-enter Password:</td><td><input  name="repassword" type="password" id="repassword" onblur="check_Password()" ></td></tr>
		
		<br>
		<tr><td>Date Of Birth:</td><td><input type="text" name="dob" id="dob"><br></td>
		<tr><td><input  name="submit" type="submit" value="submit"></td></tr>
		</table>
		</form>
		<br>

	<p>Suggestions: <span id="txtUser"></span></p>
<?php

unset($_SESSION['fullnameError'],$_SESSION['usernameError'],$_SESSION['emailError'],$_SESSION['passError'] );
?>
</body>

</html>

