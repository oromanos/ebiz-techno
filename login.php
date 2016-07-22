<?php
ob_start();
session_start();
?>
<html>
<head>
<script type="text/javascript">
function validateForm(){
			
			var uname=document.forms["myForm"]["username"].value;
			var pass=document.forms["myForm"]["password"].value;
		
			if(uname == null || uname == '' ){
				alert("User Name must be filled out");
				return false;
			}
			if(pass == null || pass == '' ){
				alert("Password must be filled out");
				return false;
			}
			
    	}

        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
 </head>
<body>

<form name="myForm" action='checklogin.php' onsubmit="return validateForm()" method='post'> 
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='username' required="required" /></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'  required="required"/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/>
</td></tr>
</table>

</form>

</body>
</html>
