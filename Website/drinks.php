<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Drinks</title>
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
        <!-- Page Title Card -->
        <div class="container">
            <div class="pagetop-drinks">
                <div class="pagetitle">Drinks</div>
            </div>
        </div>

        <div class="container">
            <div class="sub-box">
                <div class="sub-title">Browse through assortment of Drinks</div>
            </div>
        </div>

        <div class="container">
            <div class="sub-box1">
                <div class="sub-title1">What this page offers:</div>
            </div>
            <div class="sub-bg">
                <p id="para_contact">This page catalogues some of our drinks we provide in store all <br>year round, you are able to find information on the name, price <br>
                    and a brief description in addtion to if the drink is Gin, Vodka or Rum.</p>
            </div>
        </div>

        <div class="cards-bg">
            <div class="cards">
                
                <?php
                     include "dbconn.php";

                     // Query Database (For Drinks Items)
                     $sql = "SELECT * FROM menu WHERE typ = 'drink'";
                     $result = $conn->query($sql);
                     
                     // Fetching each row
                     while ($row = $result->fetch_assoc()) {
                ?>

                <div class="card">
                    <img src="<?php echo $row['image'];?>" alt="" class="card-img">
                    <div class="card-content">
                        <h3><?php echo $row['name'];?></h3>
                        <p>
                            <?php echo $row['descrip'];?>
                        </p>
                    </div>
                    <div class="card-info">
                        <div><?php echo $row['category'];?></div>
                        <div>£<?php echo $row['price'];?></div>
                    </div>
                </div><?php }?>
               
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
    <?php 
        $conn -> close();
        exit();
    ?>
</body>
</html>