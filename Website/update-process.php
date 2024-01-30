<?php
    session_start();
    include "dbconn.php";

    $userID = $_SESSION['userID'];
    
    // Updated Values from Form
    $usr  = $_POST['user']; 
    $pw   = $_POST['pass1']; 
    $fnm  = $_POST['fname'];
    $lnm  = $_POST['lname'];
    $pnum = $_POST['pnum'];
    $eml  = $_POST['email']; 

    // Update Customer Record
    $sql = "UPDATE customer SET userName='$usr',psword='$pw',firstName='$fnm',lastName='$lnm',phoneNum='$pnum',email='$eml' WHERE customerID=$userID";

    if($conn->query($sql) === TRUE) {
        header("Location:update-success.php");
        $conn->close();
    }
?>