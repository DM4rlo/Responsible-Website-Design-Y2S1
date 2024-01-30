<?php
    // Start session for user vars to be used between page
    session_start();
    include "dbconn.php";

    // Get values passed from login page
    $uname = $_POST['user'];
    $pword = $_POST['pass'];

    // Query Database (1st check is for manager)
    $sql = "SELECT * FROM manager WHERE userName = '$uname' AND psword = '$pword'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    // Query Database (1st check is for manager)
    if($row !== null && $row['userName'] == $uname && $row['psword'] == $pword){

        // Create session vars
        $_SESSION['userID'] = $row['managerID'];  // Sets up UserID
        $_SESSION['usrName'] = $row['userName'];   // Sets up Username
        $_SESSION['psw'] = $row['psword'];         // Sets up Password
        $_SESSION['fnm'] = $row['firstName'];      // Sets up First Name
        $_SESSION['lnm'] = $row['lastName'];       // Sets up Last Name
        $_SESSION['pnum'] = $row['phoneNum'];      // Sets up Phone Number
        $_SESSION['eml'] = $row['email'];          // Sets up Email Address

        // Head to manager page
        header("Location:managerPage.php");
        exit();
    } else {
        
        // reset vars
        unset($sql, $result, $row);

        // Query Database (2nd check is for customers)
        $sql = "SELECT * FROM customer WHERE userName = '$uname' AND psword = '$pword'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);

        if($row !== null && $row['userName'] == $uname && $row['psword'] == $pword){

            // Create session vars
            $_SESSION['userID'] = $row['customerID'];  // Sets up UserID
            $_SESSION['usrName'] = $row['userName'];   // Sets up Username
            $_SESSION['psw'] = $row['psword'];         // Sets up Password
            $_SESSION['fnm'] = $row['firstName'];      // Sets up First Name
            $_SESSION['lnm'] = $row['lastName'];       // Sets up Last Name
            $_SESSION['pnum'] = $row['phoneNum'];      // Sets up Phone Number
            $_SESSION['eml'] = $row['email'];          // Sets up Email Address

            // Head to employee page
            header("Location:customPage.php");
            exit();
        } else {
                // Go back to login page an print error msg
                header("Location:login.php?error=Incorrect Username or Password was given, Try again.");
                // Close connection to db
                $conn -> close();
                exit();
            }
        }
