<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My Account</title>
</head>
<body>
    <header>
        <img class="logo" src="images/0_Defaults/logo(white).png" alt="logo">
        <img class="m-logo" src="images/0_Defaults/logo(mobile_white).png" alt="mobile_logo">
        <nav>
            <ul class="nav__links">
                <li><a href="managerPage.php">Welcome</a></li>
                <li><a href="myMan.php">MyAccount</a></li>
                <li><a href="employees.php">Employees</a></li>
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
            <li><a href="managerPage.php">Welcome</a></li>
            <li><a href="myMan.php">MyAccount</a></li>
            <li><a href="employees.php">Employees</a></li>
            <li><a href="logout.php">Logout</a></li>
        </nav>
    </header>

    <section>

        <div class="container">
            <div class="sub-box1">
                <div class="sub-title1">What this page offers:</div>
            </div>
            <div class="sub-bg">
                <p id="para_contact">
                    The 'MyAccount' provide you the ability to make any<br> necessary changes to your account's details.<br>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="signup-bg">
                <div class="signup-tile">
                    <h2>MyAccount - Update Account Details</h2>
                    <form action="upd-process.php" method="POST">
                        <?php 
                            session_start();
                        ?>
                        <p id="login-text">
                            <label>Username<br></label>
                            <input type="text" maxlength="25" id="user" name="user" value="<?php echo $_SESSION['usrName'];?>" required/>
                        </p>

                        <p id="login-text">
                            <label>Password<br></label>
                            <input type="password" maxlength="30" id="pass" name="pass1" value="<?php echo $_SESSION['psw'];?>" required/>
                        </p>

                        <p id="login-text">
                            <label>First Name<br></label>
                            <input type="text" id="pass" maxlength="30" name="fname" value="<?php echo $_SESSION['fnm'];?>" required/>
                        </p>

                        <p id="login-text">
                            <label>Last Name<br></label>
                            <input type="text" id="pass" maxlength="30" name="lname" value="<?php echo $_SESSION['lnm'];?>" required/>
                        </p>

                        <p id="login-text">
                            <label>Email<br></label>
                            <input type="email" id="pass" maxlength="30" name="email" value="<?php echo $_SESSION['eml'];?>" required/>
                        </p>

                        <p id="login-text">
                            <label>Phone Number<br></label>
                            <input type="number" maxlength="30" id="pass" name="pnum" value="<?php echo $_SESSION['pnum'];?>" required/>
                        </p>

                        <p id="login-text">
                            <input type="submit" id="subtn" value="Update"/>
                        </p>
                    </form>
                    <p id="login-text">
                        <button onclick="window.location.href='del-process.php';" id="sudbtn">Delete</button>
                    </p>
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