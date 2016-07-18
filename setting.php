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
            
            <title>
                Home 
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
            
            <input type="radio" value="change_password" name="set" onclick="location.href='change_password.php'" >  change Password.<br>
        </p>
    </body>
    </html>
    <?php
 }  
 ?>