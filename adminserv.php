<?php
$error='';if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {

 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "bookstore");

 $query = mysqli_query($conn, "SELECT * FROM account_management WHERE Login_Password='$pass' AND email_address='$user' AND Account_Type_ID='2'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: adminpage.php");
}
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
