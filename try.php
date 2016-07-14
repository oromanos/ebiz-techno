<?php
/*if (!isset($_SERVER['HTTP_REFERER'])){

   echo "<h1> unauthorised access</h1>";
   
    }*/
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
        <p id="demo" align="center"><a href="signout.php"><input type="submit" value="Signout" onclick="alert('are you sure you want to logout??')"></a> </p>
    </body>
    </html>
    <?php
 }  
 ?>