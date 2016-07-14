<?php
session_start();
if($_SESSION['username']==''){
    header('location:login.php');
    die();


}
?>
 <!DOCTYPE html>
    <html>

   
    <head>
        <title>Home </title>
        <script type="text/javascript">
        
    </script>
    </head>
    <body>
    <h1>Welcome</h1>
       <p id="demo" align="right"></p>

        <script>
        document.getElementById("demo").innerHTML = Date();
        </script>
    <hr>
    <?php   

         session_start();
         
         $username=$_SESSION['username'];     
         echo'welcome :'. $username.'<br>';




      
    ?>

        
    </body>
    </html>