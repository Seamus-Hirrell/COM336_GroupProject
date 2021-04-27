<?php
session_start();

// if the user has no items in their basket, initialize their cart to an empty array
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

// add the book to the user's cart
array_push($_SESSION['cart'], $_POST['addThisBook']);

// return to the books page
header("Location: books.html");
?>
