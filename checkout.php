<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Checkout</title>
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

        <!-- form -->
        <div class="container-sm">
            <div class="row">
                <div class="col">
                    <h1 class="w-50 mx-auto">Delivery Details</h1>

                    <!-- contains 7 text inputs and a submit button -->
            		<form action="checkout2.php" method="post" class="w-50 mx-auto">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="addressLine1">Address Line 1:</label>
                            <input type="text" class="form-control" placeholder="Enter address line 1" name="addressLine1" id="addressLine1">
                        </div>
                        <div class="form-group">
                            <label for="addressLine2">Address Line 2:</label>
                            <input type="text" class="form-control" placeholder="Enter address line 2" name="addressLine2" id="addressLine2">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="city" id="city">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" placeholder="Enter country" name="country" id="country">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode:</label>
                            <input type="text" class="form-control" placeholder="Enter postcode" name="postcode" id="postcode">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 float-right">Submit</button>
                    </form>
                </div>
            </div>
    	</div>

        <!-- footer -->
    	<footer>
    	  <p class="mb-0"><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
    	</footer>

    </body>
</html>
