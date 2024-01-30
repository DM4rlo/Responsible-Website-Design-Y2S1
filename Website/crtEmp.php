<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Employees (Create)</title>
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

    <!-- This page is used to welcome the user to the features found in the page -->
    <section>
        <div class="container">
            <div class="employ-bg">
                <div class="employ-tile">
                    <h2>Employees - (Create, Read, Update & Delete)</h2>
                    <?php
                        include "dbconn.php";

                        $sql = "SELECT * FROM employee";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                    ?>
                    <style>
                        .table, td, b{
                            background-color:#fff;
                            font-family: "Monsterrat", sans-serif;
                            margin: 30px;
                        }
                    </style>
                    <table>
                        <tr>
                            <td><b>EmployeeID</b></td>
                            <td><b>First Name</b></td>
                            <td><b>Last Name</b></td>
                            <td><b>Phone Number</b></td>
                            <td><b>Email</b></td>
                            <td><b>Role</b></td>
                        </tr>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row["employeeID"]; ?></td>
                                <td><?php echo $row["firstName"]; ?></td>
                                <td><?php echo $row["lastName"]; ?></td>
                                <td><?php echo $row["phoneNum"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["rol"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                        } else {
                        ?>
                            <p>0 results</p>
                        <?php
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="buttons-bg">
                <a href="employees.php" class="tile-cva">Cancel</a>
            </div>
        </div>

        <div class="container">
            <div class="signup-bg">
                <div class="signup-tile">
                    <h2>Register - Create a new account</h2>
                    <form action="signup-emp-process.php" method="POST">

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
                            <label>Phone Number<br></label>
                            <input type="number" maxlength="30" id="pass" name="pnum" required/>
                        </p>

                        <p id="login-text">
                            <label>Role - (Bartender)<br></label>
                            <select name="role" class="role-fx" id="pass">
                                <option value="bartender">bartender</option>
                                <option value="floortender">floortender</option>
                                <option value="barback">barback</option>
                            </select>
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