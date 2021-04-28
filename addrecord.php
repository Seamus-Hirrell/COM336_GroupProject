<?php
include 'db_connect_admin.php';
if(isset($_POST['add']))
{    
     $custid = $_POST['custid'];
     $email = $_POST['email'];
     $pwd = $_POST['pwd'];
     $acctype = $_POST['acctype'];
     $sql = "INSERT INTO account_management (Customer_id,email_address,Login_Password,Account_Type_ID)
     VALUES ('$custid','$email','$pwd','$acctype')";
     if (mysqli_query($conn, $sql)) {
        echo "New record added successfully!";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>