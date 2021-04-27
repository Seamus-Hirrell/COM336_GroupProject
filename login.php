<?php
include("loginserv.php"); // Include loginserv for checking username and password
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

        <a href="login.php">Sign In</a>
        <a href="basket.php">Basket</a>
        <a href="books.php">Books</a>
        <a href="reviews.php">Reviews</a>
        <a class="active"href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="homepage.php">Home</a>
    </div>

    <div class="login">
        <h1 align="center">Login</h1>
        <form action="" method="post" style="text-align:center;">
            <input type="text" placeholder="Email" id="user" name="user"><br/><br/>
            <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>



            <input type="submit" value="Login" name="submit">
            <a href="logout.php">Logout</a><br>
            <p>Dont have an Account?</p><a href="register.php">Register Now</a>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>
        </body>
        </html>
