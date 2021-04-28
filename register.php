<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css"
                href="register.css">
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

<div class="register">
<h1 align="center">Register</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Email" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit">


<a class="button" href="login.php">Go to Login Page</a>

</form>

<?php

if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error());
 $db = mysqli_select_db($conn, 'bookstore') or die("DB Error");

 $query = mysqli_query($conn, "SELECT * FROM account_management WHERE email_address='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
  if (filter_var($user, FILTER_VALIDATE_EMAIL) == true) {

 $sql = "INSERT INTO account_management(email_address,Login_Password) VALUES('$user','$pass')";
 $result = mysqli_query($conn, $sql);


 //Result Message
 if($result){
 echo "Your Account has been Registered Successfully";
 }
 else
 {
 echo "Failure! Attention needed!";
 }
 }
 else
 {
  echo "Invalid email address";
 }
}
 else
 {
 echo "An account with that email has alrady been registered! Please try again with a different email address.";
 }
 }


 else
 {
 ?>

 <script>alert('Please fill in all fields');</script>
 <?php
 }
}
?>



 <footer>
  <p><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
</footer>



</body>
</html>
