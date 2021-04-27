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

    <!-- 2 forms -->
    <div class="container-sm">
        <form action="order_success_page.php" method="post">
            <div class="row">
                <div class="col">
                    <h1 class="">Billing Address</h1>
                </div>
                <div class="col">
                    <h1 class="">Payment Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingName">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="billingName" id="billingName">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="cardNumber">Card Number:</label>
                        <input type="text" class="form-control" placeholder="Enter card number" name="cardNumber" id="cardNumber">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingAddressLine1">Address Line 1:</label>
                        <input type="text" class="form-control" placeholder="Enter address line 1" name="billingAddressLine1" id="billingAddressLine1">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nameOnCard">Name on Card:</label>
                        <input type="text" class="form-control" placeholder="Enter Name On Card" name="nameOnCard" id="nameOnCard">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingAddressLine2">Address Line 2:</label>
                        <input type="text" class="form-control" placeholder="Enter address line 2" name="billingAddressLine2" id="billingAddressLine2">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="expirationDay">Expiration Date:</label>
                        <div class="row">
                            <div class="col pr-0">
                                <!-- select month -->
                                <select class="form-control" name="expirationDay" id="expirationDay">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="p-2">
                                <span class="mx-auto"><strong>/</strong></span>
                            </div>
                            <div class="col pl-0">
                                <!-- select year -->
                                <select class="form-control" name="expirationMonth" id="expirationMonth">
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                    <option>2029</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingCity">City:</label>
                        <input type="text" class="form-control" placeholder="Enter city" name="billingCity" id="billingCity">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="CVV">CVV:</label>
                        <input type="text" class="form-control" placeholder="Enter CVV" name="CVV" id="CVV">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingCountry">Country:</label>
                        <input type="text" class="form-control" placeholder="Enter country" name="billingCountry" id="billingCountry">
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="billingPostcode">Postcode:</label>
                        <input type="text" class="form-control" placeholder="Enter postcode" name="billingPostcode" id="billingPostcode">
                    </div>
                </div>
                <div class="col">
                    <span class="float-right"><button type="submit" class="btn btn-primary mb-2">Submit</button></span>
                </div>
            </div>

            <!-- carry on values from form on previous page -->
            <input type="hidden" name="email"           value="<?php echo $_POST['email']?>">
            <input type="hidden" name="name"            value="<?php echo $_POST['name']?>">
            <input type="hidden" name="addressLine1"    value="<?php echo $_POST['addressLine1']?>">
            <input type="hidden" name="addressLine2"    value="<?php echo $_POST['addressLine2']?>">
            <input type="hidden" name="city"            value="<?php echo $_POST['city']?>">
            <input type="hidden" name="country"         value="<?php echo $_POST['country']?>">
            <input type="hidden" name="postcode"        value="<?php echo $_POST['postcode']?>">
        </form>
    </div>

    <!-- footer -->
    <footer>
        <p class="mb-0"><em>Copyright</em>  <img src="copyright.jpg" width="25" 2height="25"> 2021 All Rights Reserved.</p>
    </footer>

</body>
</html>
