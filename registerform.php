
<html>
<head>
<title>PHP User Registration Form</title>
<style>
.message {color: #FF0000;font-weight: bold;text-align: center;width: 100%;padding: 10;}
body{width:610px;}
.demo-table {background:#FFDFDF;width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table td {padding: 20px 15px 10px 15px;}
.demoInputBox {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}
.btnRegister {padding: 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}
</style>
</head>
<body>
<form name="Form Registration " method="post" action="connection.php">
<table border="0" width="500" align="center" class="demo-table">
<div class="message"><?php if(isset($message)) echo $message; ?></div>
<tr>
<td>Username</td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"></td>
</tr>
<tr>
<td>Full Name</td>
<td><input type="text" class="demoInputBox" name="fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="email" value=""></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input type="date" name="dob" required="required " ><br></td>
</tr>

</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
</body>
</html>

