<?php
    include "dbconn.php"; 

    // Set up varaibles
    $fnm = $_POST['fname'];
    $lnm = $_POST['lname'];
    $eml = $_POST['email'];
    $rol = $_POST['role'];
    $pnm = $_POST['pnum'];

    // Insert new customer sql
    $sql = "INSERT INTO employee (firstName ,lastName ,phoneNum ,email, rol) 
    VALUES ('$fnm', '$lnm', '$pnm', '$eml', '$rol')";
        
    if($conn->query($sql) === TRUE){
        header("Location:employees.php");
        $conn -> close();
    } 

    echo "Error: " . $sql . "<br>" . $conn->error;
?>