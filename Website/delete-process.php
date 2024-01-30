<?php
    session_start();
    include "dbconn.php";

    $userID = $_SESSION['userID'];
    
    // Update Customer Record
    $sql = "DELETE FROM customer WHERE customerID=$userID";

    if($conn->query($sql) === TRUE) {

        // Remove an destory Login sessions variables
        session_unset();
        session_destroy();

        $conn->close();

        header("Location:delete-success.php");
        exit();
    }

    echo "Error: " . $sql . "<br>" . $conn->error;
?>