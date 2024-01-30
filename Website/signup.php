<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <header>
        <img class="logo" src="images/0_Defaults/logo(white).png" alt="logo">
        <img class="m-logo" src="images/0_Defaults/logo(mobile_white).png" alt="mobile_logo">
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">Home</a></li>
                <li><a href="meals.php">Meals</a></li>
                <li><a href="drinks.php">Drinks</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <!-- Hamburger Icon for Smaller Formats -->
            <button class="hamburger">
                <!-- Each span is acts as a line for the icon -->
                <span></span> <!-- child (1)-->
                <span></span> <!-- child (2)-->
                <span></span> <!-- child (3)-->
            </button>
        </nav>
        <!-- Mobile Nav-->
        <nav class="mobile-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="meals.php">Meals</a></li>
            <li><a href="drinks.php">Drinks</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="signup-bg">
                <div class="signup-tile">
                    <h2>Register - Create a new account</h2>
                    <form action="signup-process.php" method="POST">

                        <p id="login-text">
                            <label>Username<br></label>
                            <input type="text" maxlength="25" id="user" name="user"  required/>
                        </p>

                        <p id="login-text">
                            <label>Password<br></label>
                            <input type="password" maxlength="30" id="pass" name="pass1" required/>
                        </p>

                        <p id="login-text">
                            <label>Confirm Password<br></label>
                            <?php if(isset($_GET['error'])) { ?>
                                <label><span class="setrd"><?php echo $_GET['error'];?></span></label>
                            <?php }?>
                            <input type="password" maxlength="30" id="pass" name="pass2" required/>
                        </p>

                        <p id="login-text">
                            <label>First Name<br></label>
                            <input type="text" id="pass" maxlength="30" name="fname" required/>
                        </p>

                        <p id="login-text">
                            <label>Last Name<br></label>
                            <input type="text" id="pass" maxlength="30" name="lname" required/>
                        </p>

                        <p id="login-text">
                            <label>Email<br></label>
                            <input type="email" id="pass" maxlength="30" name="email" required/>
                        </p>

                        <p id="login-text">
                            <label>Age<br></label>
                            <input type="date" id="pass" name="age" required/>
                        </p>

                        <p id="login-text">
                            <label>Phone Number<br></label>
                            <input type="number" maxlength="30" id="pass" name="pnum" required/>
                        </p>

                        <p id="login-text">
                            <input type="submit" id="subtn" value="Register"/>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container-footer">
            <!-- Links to other pages at bottom -->
            <ul class="flex-row">
                <h1>Links to additional information about our site</h1>
                <div class="lineAnime">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="meals.php">Meals</a></li>
                    <li><a href="drinks.php">Drinks</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </div>
            </ul>
            <!-- Font Awesome Icons (FB,Insta,Twitter & Youtube)-->
            <ul class="flex-row">
                <li><a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></li>
                <li><a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://en-gb.facebook.com/login.php"><i class="fab fa-facebook"></i></a></li>
            </ul>
            <p>&copy; 2021 The Phoneix Nest™, Inc. The Phoneix Nest and the Phoneix logo are trademarks of The Phoneix Nest, Inc. The Phoneix Nest</p>
        </div>
    </footer>
    <!-- Main Scripts of use below -->
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/e6b2b4e948.js" crossorigin="anonymous"></script>
</body>
</html>