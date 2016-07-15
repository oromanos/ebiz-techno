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

        
   
   

    <?php   

         session_start();
         
         $username=$_SESSION['username'];     
         echo'welcome :'. $username.'<br>';





      
    ?>
    <hr>
    <form action="signout.php">
         <label>SIGNOUT: <input type="submit" name="signout" value="Sign Out" onclick="return confirm('Are you sure you want to continue')">   </label>  
    </form>    
    </body>
    </html>