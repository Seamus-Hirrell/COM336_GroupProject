<!DOCTYPE html>
<html>
<head>
  <title>View Records</title>
  <link rel="stylesheet" type="text/css"
                href="adminpage.css">
</head>
<body>

<h2>Customer Details</h2>

<table border="2">
  <tr>
    <td>Customer ID</td>
    <td>Email Address</td>
    <td>Password</td>
    <td>Account Type ID</td>
  </tr>

<?php

include "db_connect_admin.php"; 

$records = mysqli_query($conn,"SELECT * FROM account_management"); 
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Customer_id']; ?></td>
    <td><?php echo $data['email_address']; ?></td>
    <td><?php echo $data['Login_Password']; ?></td>
    <td><?php echo $data['Account_Type_ID']; ?></td>    
    <td><a href="update.php?id=<?php echo $data['Customer_id']; ?>">UPDATE</a></td>
    <td><a href="delete.php?id=<?php echo $data['Customer_id']; ?>">DELETE</a></td>
    <td><a href="add.php">ADD</a></td>
   
  </tr>

<?php
}
?>
</table>
<br><br><br><a class="button" href="logout.php">Logout</a>

</body>
</html>