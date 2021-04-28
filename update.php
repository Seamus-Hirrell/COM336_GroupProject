<?php

include "db_connect_admin.php"; 

$id = $_GET['id']; 

$qry = mysqli_query($conn,"SELECT * FROM account_management WHERE Customer_id='$id'"); 

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $accid = $_POST['accid'];
    
    $edit = mysqli_query($conn,"UPDATE account_management SET email_address='$email', Login_Password='$pwd', Account_Type_ID='$accid' WHERE Customer_id='$id'");
    
    if($edit)
    {
        mysqli_close($conn);
        header("location:adminpage.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>

<h3>Update Data</h3>
<link rel="stylesheet" type="text/css"
                href="update.css">

<br><br><br><form method="POST">
  <input type="text" name="email" value="<?php echo $data['email_address'] ?>" placeholder="Enter Email Address" Required>
  <input type="text" name="pwd" value="<?php echo $data['Login_Password'] ?>" placeholder="Enter Password" Required>
  <input type="text" name="accid" value="<?php echo $data['Account_Type_ID'] ?>" placeholder="Enter Account Type ID" Required>
  <br><br><input type="submit" name="update" value="UPDATE">
  <br><br><br><a class="button" href="logout.php">Logout</a>
</form>