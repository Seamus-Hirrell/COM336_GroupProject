<?php
include("loginserv.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css"
                href="login.css">


</head>
<body>
	<div class="navbar">
	<div class="logo">
		<img src="logo.jpg" style="width: 100px"></a>
	</div>

  <a href="homepage.html">Home</a>
  <a href="aboutus.html">About Us</a>
  <a href="contactus.html">Contact Us</a>
  <a href="books.html">Books</a>
  <a href="reviews.html">Reviews</a>
  <a href="basket.html">Basket</a>
  <a class="active" href="login.php">Sign In</a>

</div>
</div>

<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Email" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>



<input type="submit" value="Login" name="submit">
<br><a class="button" href="logout.php">Logout</a>
<br><p><b>Dont have an Account?</p></b>
<br><a class="button" href="register.php">Register Now</a>
<br><a class="button" href="adminlogin.php">Admin Login</a>
<span><?php echo $error; ?></span>

<footer>
  <p><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
</footer>
</body>
</html>
