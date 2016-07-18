<?php

    session_start();
    if ($_SESSION['username']=='') {
        header('location:login.php');
        die();
    }
 {
?>
   <html>
        <head>
            <script>
                function validatePassword($newpassword,$renewpassword) {
                    var a = document.getElementById("newpassword").value;
                    var b = document.getElementById("renewpassword").value;
                    if (a!=b) {
                            alert("Passwords do no match");
                            return false;
                    }
                    
                }
        
            </script>
            <title>
                Reset Password 
            </title>
        </head>
    <body>
        <h1>
            <marque>
                    Welcome
            </marque>
        </h1>
        <p id="demo" align="right">
        <script>
            document.getElementById("demo").innerHTML = Date();
        </script>
       </p>

        
        <hr>
    <?php     
         
        
            session_start();
         $username=$_SESSION['username'];     
         echo'welcome :'. $username.'<br>';
        
    ?>
        <br><br><br><br><br>

        <p id="demo" align="center">
            <form action="change_password_action.php" method="POST">
                <table align="center">
                <tr>
                    <td>
                        Enter old password<font face="red"><sup>*</sup></font>: <input type="password" id="oldpassword" name="oldpassword" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter new password<font face="red"><sup>*</sup></font>: <input type="password" id="newpassword" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm password<font face="red"><sup>*</sup></font>: <input type="password" id="renewpassword" onblur="validatePassword(this.text)" name="renewpassword" required>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" >        <input type="submit" value="reset" >         
                    </td>
                </tr>
                </table>
            </form>
        </p>
    </body>
    </html>
    <?php
 }  
 ?>