<?php
// this script will remove a specified book from the basket
session_start();
$i = array_search($_POST['removeThisBook'], $_SESSION['cart']);
if($i === 0){
    array_shift($_SESSION['cart']);
} else {
    array_splice($_SESSION['cart'], $i, 1);
}
header("Location: basket.php");
?>
