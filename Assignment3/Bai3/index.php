<?php
include_once('connect.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<link rel="stylesheet" href="">
</head>
<body>
 <?php
include_once('login_process.php')
?>
<h1>Đăng Nhập</h1>
<form action=" login_process.php" method="post">
<table>
<tr>
<td><label for="name">Username:</label></td>
<td><input type="text" name="username" id="name"></td>
</tr>
<tr>
<td><label for="pass">Password</label></td>
<td><input type="password" name="password" id="pass"></td>
</tr>
<tr>
<td colspan="2">
<input type="checkbox" 
name="remember"><span>Remember</span>
</td>
</tr>
<tr>
<td><input type="submit" value="login" name="login"></td>
<td><input type="submit" value="cancel" name="cancel"></td>
</tr>
</table>
</form>
</body>
</html>