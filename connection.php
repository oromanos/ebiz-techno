<?php

define('DB_HOST', '192.168.1.222');
define('DB_NAME', 'ebiz-techno');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
    
    $fullname=$_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    //$date=$_POST['date'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {  
    
                                                              } 
    else {
    echo("$email is not a valid email address");
          }

//print_r($_POST);
    $password =  md5($_POST['password']);
    $dateval=implode('-',array_reverse(explode('-',$_POST['date'])));
    $query = "INSERT INTO user (fullname,username,email,password,date) VALUES ('$fullname','$username','$email','$password','$dateval')";
    //echo $query;exit;
    $data = mysql_query ($query)or die(mysql_error());
        if($data)
          {
           echo "YOUR REGISTRATION IS COMPLETED...";

         }
}

function SignUp()
{
 if(!empty($_POST['username'])) {
     $query = mysql_query("SELECT * FROM user WHERE username='" . $_POST["username"]  ."' and password = '". md5($_POST["password"])."'") or die(mysql_error());
     if(!$row = mysql_fetch_array($query))
      {
        newuser();
      }
     else
      {
        echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
      }
                      }
}
if($_POST['submit']!='')
 {
    SignUp();
 }
?>

