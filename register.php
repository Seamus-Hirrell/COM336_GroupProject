<!doctype html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css"
    href="register.css">
</head>
<body>
    <div class="navbar">
        <a href="login.php">Sign In</a>
        <a href="basket.php">Basket</a>
        <a href="books.php">Books</a>
        <a href="reviews.php">Reviews</a>
        <a class="active"href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="homepage.php">Home</a>
    </div>

    <div class="register">
        <h1 align="center">Register</h1>
        <form action="" method="post" style="text-align:center;">
            <input type="text" placeholder="Email" id="user" name="user"><br/><br/>
            <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
            <input type="submit" value="Register" name="submit">
            <!-- Login Link -->
            <a href="login.php">Login</a>
        </form>

        <?php

        if(isset($_POST["submit"])){
            if(!empty($_POST['user']) && !empty($_POST['pass'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
                $db = mysqli_select_db($conn, 'bookstore') or die("DB Error"); // Select DB from database
                //Selecting Database
                $query = mysqli_query($conn, "SELECT * FROM account_management WHERE email_address='".$user."'");
                $numrows = mysqli_num_rows($query);
                if($numrows == 0)
                {
                    if (filter_var($user, FILTER_VALIDATE_EMAIL) == true) {
                        # code...

                        //Insert to Mysqli Query
                        $sql = "INSERT INTO account_management(email_address,Login_Password) VALUES('$user','$pass')";
                        $result = mysqli_query($conn, $sql);


                        //Result Message
                        if($result){
                            echo "Your Account has been Registered Successfully";
                        }
                        else
                        {
                            echo "Failure! Attention needed!";
                        }
                    }
                    else
                    {
                        echo "Invalid email address";
                    }
                }
                else
                {
                    echo "An account with that email has alrady been registered! Please try again with a different email address.";
                }
            }


            else
            {
                ?>
                <!--Javascript Alert -->
                <script>alert('Required all felds');</script>
                <?php
            }
        }
        ?>

    </body>
    </html>
