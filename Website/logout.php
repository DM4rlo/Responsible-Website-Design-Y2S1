<?php
    session_start();
    include "dbconn.php";

    // Remove an destory Login sessions variables
    session_unset();
    session_destroy();

    // Closes db connection
    $conn -> close(); 

    // Return back to login page
    header("Location: login.php");
    exit();
?>