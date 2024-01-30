<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
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

    <!-- Intro Card to page // Should be the colour red the other 3 tiles are white -->
    <section>
        <div class="container">
            <div class="topspace">
                <div class="topS-left">
                    <h1>Welcome to The Phoneix Nest's Website, All the information you need in one place.</h1>
                    <p>By exploring our Website you will discover the types of meals, drinks and events we provide to our loyal customers. We
                        cater to thoses searching for a light drink to a a lively social night out.
                    </p>
                </div>
                <div class="topS-right">
                    <img class="intro-img" src="images/1_Homepage/kitchen-interior.jpg" alt="intro-img">
                    <img class="intro-img2" src="images/1_Homepage/bar-interior.jpg" alt="intro-img2">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="workspace">
                <h1>We are a is a new <span class="setrd">pub company</span> operating and founded in the <span class="setrd">Birmingham</span>. We offer an assortment of 
                <span class="setrd">Meals & Signature Drinks.</span></h1>
            </div>

            <!-- Tile for Meals -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images/1_Homepage/meal-tile.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Check out some of our Meals</span>
                        </div>
                        <h1 class="tile-title">Meals & Catering</h1>
                        <p>We offer a variety of meals that can be you can choose from when you dine with us. Even though we offer more of
                            an emphasis on our drinks there is an assortment of meals that can complement the range of Beverages you can choose from.
                        </p>
                        <a href="meals.php" class="tile-cta">Learn more</a>
                    </div>
                </div>
            </div>

            <!-- Tile for Drinks -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images/1_Homepage/drink-tile.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Check out some of our Beverages</span>
                        </div>
                        <h1 class="tile-title">Drinks & Beverages</h1>
                        <p>Besides offering the standard drinks found at every drinking establishment we offer a range of signature cocktails.
                            30 different cocktails. 27 Alcoholic and 3 Non-Alcoholic. For further information about the individual drinks follow
                            the link below.
                        </p>
                        <a href="drinks.php" class="tile-cta">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- Tile for Events -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images/1_Homepage/event-tile.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Check out some of our Events that may be running</span>
                        </div>
                        <h1 class="tile-title">Running Events</h1>
                        <p>We have a mix of events that relate to the festive events that may be currently occurring or taking place in the future.
                            We have events that run on fridays an saturdays on a weekly basis that can be booked ahead of time. Further information
                            can be found below.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tile for Account Creation -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images/1_Homepage/account-tile.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Check out some of benefits of creating an account with us</span>
                        </div>
                        <h1 class="tile-title">Create an Account with us</h1>
                        <p>You have the ability to create an account with that can provide you with the benefit to book events and enquire further
                            information about our services in addition to many other features. Click the link below to create an account now.
                        </p>
                        <a href="signup.php" class="tile-cta">Learn more</a>
                    </div>
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