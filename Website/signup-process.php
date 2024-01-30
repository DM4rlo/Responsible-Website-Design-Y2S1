<?php
    include "dbconn.php"; 

    // Checks if passwords match
    $pw1 = $_POST['pass1'];
    $pw2 = $_POST['pass2'];

    if($pw1 == $pw2){

        // Set up varaibles
        $usr = $_POST['user'];
        $fnm = $_POST['fname'];
        $lnm = $_POST['lname'];
        $eml = $_POST['email'];
        $age = $_POST['age'];
        $pnm = $_POST['pnum'];

        // Insert new customer sql
        $sql = "INSERT INTO customer (userName ,psword ,firstName ,lastName ,age ,phoneNum ,email) 
        VALUES ('$usr', '$pw1', '$fnm', '$lnm', '$age', '$pnm', '$eml')";
        
        if($conn->query($sql) === TRUE){
            header("Location:sign-confrm.php");
            $conn -> close();
        } 
    
    } else {
        // Go back to login page an print error msg
        header("Location:signup.php?error=Passwords do not match!");
        // Close connection to db
        $conn -> close();
        exit();
    }
?> 