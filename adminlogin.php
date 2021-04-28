<?php
include("adminserv.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css"
                href="login.css">


</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Email" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>



<input type="submit" value="Login" name="submit">
<br><a class="button" href="logout.php">Logout</a>
<span><?php echo $error; ?></span>

<footer>
  <p><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
</footer>
</body>
</html>