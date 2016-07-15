<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
      <title>Sign up </title>
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
                    xmlhttp.open("POST", "usernameValidate.php?q=" + str, true);
                    xmlhttp.send();
                }

        }

        function validatePassword($password,$repassword) {
                    var a = document.getElementById("password").value;
                    var b = document.getElementById("repassword").value;
                    if (a!=b) {
                            alert("Passwords do no match");
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
            if(Dob == null || Dob == '' ){
                alert("Date of Birth must be filled out");
                return false;
            }
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
<body>    
        <h1>Sign Up Page</h1>
        <hr>
        <br><br>
        
        <form name="myForm"  onsubmit="return validateForm()" action="insertuser.php" method="POST">
            <table>

                    <tr><td>Full Name:</td><td><input type="text" name="fullname" ID="fullname" ></td><p><span id="txtUser"></span></p></tr>
                    <tr><td>User Name:</td><td><input type="text" name="username" id="username" onblur="showUser(this.value)" ></td></tr>
                    <tr><td>Email ID:</td><td><input type="text" name="email"></td></tr>
                    <tr><td>Password:</td><td><input type="password" name="password" id="password" ></td></tr>
                    <tr><td>Confirm Password:</td><td><input type="password" name="repassword" id="repassword" onblur="validatePassword(this.value)"></td></tr>
                    <tr><td>Date Of Birth:</td><td><input type="text" name="dob" id="dob"></td></tr>
                    <tr><td><input type="submit" name="submit" value="Sign-up" > &nbsp 
                    <input type="submit" value="Reset" ></td></tr>
            </table>
            
        </form>
        <p><span id="txtUser"></span></p>
</body>
</html>

