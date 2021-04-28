<?php

include "db_connect_admin.php"; 
$id = $_GET['id']; 

$del = mysqli_query($conn,"DELETE FROM account_management WHERE Customer_id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:adminpage.php"); 
    exit;	
}
else
{
    echo "Error deleting record";
}
?>