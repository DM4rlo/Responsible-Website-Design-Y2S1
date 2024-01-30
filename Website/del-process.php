<?php
    session_start();
    include "dbconn.php";

    $userID = $_SESSION['userID'];
    
    $sql = "DELETE FROM manager WHERE managerID=$userID";

    if($conn->query($sql) === TRUE) {

        // Remove an destory Login sessions variables
        session_unset();
        session_destroy();

        $conn->close();

        header("Location:delete-success.php");
        exit();
    }
?>