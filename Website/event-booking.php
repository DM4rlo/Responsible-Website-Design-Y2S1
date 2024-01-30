<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bookings</title>
</head>
<body>
    <header>
        <img class="logo" src="images/0_Defaults/logo(white).png" alt="logo">
        <img class="m-logo" src="images/0_Defaults/logo(mobile_white).png" alt="mobile_logo">
        <nav>
            <ul class="nav__links">
                <li><a href="customPage.php">Welcome</a></li>
                <li><a href="myacc.php">MyAccount</a></li>
                <li><a href="event-booking.php">Bookings</a></li>
                <li><a href="logout.php">Logout</a></li>
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
            <li><a href="customPage.php">Welcome</a></li>
            <li><a href="myacc.php">MyAccount</a></li>
            <li><a href="event-booking.php">Bookings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </nav>
    </header>

    <!-- This page is used to welcome the user to the features found in the page -->
    <section>
    <div class="container">
            <div class="workspace">
                <h1>You are able to <span class="setrd">book events</span> that we run every week on this page, we currently offer two primary events,
                    a event for <span class="setrd">friday</span> and one for <span class="setrd">saturday</span>.
                </h1>
            </div>

            <!-- Tile for Friday Events -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images\4_Events\friday_event.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Price: £30</span>
                        </div>
                        <h1 class="tile-title">Friday Band Visit</h1>
                        <p>On fridays we run a Band event that entails a county or soft rock band come in an play some tunes for a couple of hours. A new band is present every
                            week to keep the venue from getting dry, but if a band performs extremely well then we may have them join us again.
                        </p>
                        <form action="fri-book.php" id="sat-form" method="POST">
                            <input type="submit" class="tile-cta" value="Purchase"/>
                            <input type="number" id="event-qty" name="qty" value="0" min="0" max="99"/>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tile for Saturday Events -->
            <div class="tile-container">
                <div class="tile-card">
                    <div class="tile-img">
                        <img src="images\4_Events\saturday_event.jpg" alt="meal-img">
                    </div>
                    <div class="tile-info">
                        <div class="eye-catcher">
                            <span>Price: £30</span>
                        </div>
                        <h1 class="tile-title">Saturday Improv Night</h1>
                        <p>On saturdays we run an event know as improve night that entails a professionals with prior experience in improv to provide entertainment for the night.
                            As a bonus random willing participants from the audience can take part in the improve to spice things up.
                        </p> 
                        <form action="sat-book.php" id="sat-form" method="POST">
                            <input type="submit" class="tile-cta" value="Purchase"/>
                            <input type="number" id="event-qty" name="qty" value="0" min="0" max="99"/>
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
                <h1>You are currently logged in</h1>
            </ul>
            <p>&copy; 2021 The Phoneix Nest™, Inc. The Phoneix Nest and the Phoneix logo are trademarks of The Phoneix Nest, Inc. The Phoneix Nest</p>
        </div>
    </footer>
    <!-- Main Scripts of use below -->
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/e6b2b4e948.js" crossorigin="anonymous"></script>
</body>
</html>