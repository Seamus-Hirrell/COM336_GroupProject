<?php session_start(); ?>
<html>
<head>
	<title>Your Basket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap stuff -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type=text/css href="basket.css">
</head>
<body>
	<!-- navbar -->
    <div class="navbar2">
		<div class="logo">
			<img src="logo.jpg" style="width: 100px"></a>
		</div>

		<a href="homepage.html">Home</a>
		<a href="aboutus.html">About Us</a>
		<a href="contactus.html">Contact Us</a>
		<a href="books.html">Books</a>
		<a href="reviews.html">Reviews</a>
		<a class="active" href="basket.html">Basket</a>
		<a href="signin.html">Sign In</a>
	</div>

	<?php
	// prints a rectangle containing the book's name, price and cover
	// this assumes that the names of the images are in the format "bookname.jpg"
	function printItem($bookname, $price){
		echo '
		<div class="row border border-dark rounded p-1 m-2 bg-alt">
			<div class="col-3">
				<img src="book_images/'.$bookname.'".jpg class="img-fluid" style="height: 10em;">
			</div>
			<div class="col-6">
				'.$bookname.'<br>£'.$price.'
			</div>
			<div class="col-3">
				<form action="basket_remove_item.php" method="post">
					<button type="submit" name="removeThisBook" value="'.$bookname.'" class="btn btn-primary btn-block py-3 my-5">Remove from basket</button>
				</form>
			</div>
		</div>
		';
	}
	?>

	<div class="container-sm">

		<h1>Your Basket</h1>

		<?php
        $total = 0;

		// print each item in the user's cart
		if(!isset($_SESSION['cart'])){
			echo 'Cart is empty';
		} else {
			foreach($_SESSION['cart'] as $book){
				$connection = new mysqli('localhost', 'root', '', 'bookstore');
				$query = "SELECT Book_Price FROM books WHERE Book_Name = \"$book\"";
				$result = mysqli_query($connection, $query);
				$result = mysqli_fetch_array($result);
				$total += $result[0];
				printItem($book, $result[0]);
				mysqli_close($connection);
			}
		}
		?>

		<!-- a rectangle with the user's order total and a button linking to the checkout -->
		<div class="row m-2">
			<div class="col-9 border border-dark rounded pt-3 bg-alt">
				<span>Order Total:</span>
				<span class="float-right">£<?php echo $total;?></span>
			</div>
			<div class="col-3 pl-1 pr-0">
				<a href="checkout.php" class="btn btn-primary btn-block py-3 my-0">Proceed To Checkout</a>
			</div>
		</div>

	</div>

	<footer>
	  <p class="mb-0"><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
	</footer>
</body>
</html>
