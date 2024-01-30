<?php
    session_start();
    include "dbconn.php";

    $cusID = $_SESSION['userID'];
    $qty = $_POST['qty'];
    $total = 30.00 * $qty;
    $fn = $_SESSION['fnm'];
    $ln = $_SESSION['lnm'];

    // Insert new customer sql
    $sql = "INSERT INTO satevent (customerID, firstName, lastName, stdQty, totalPrice, paystatus) 
    VALUES ('$cusID', '$fn', '$ln','$qty', '$total', 'pending')";
    
    if($conn->query($sql) === TRUE){
        header("Location:purchase-conf.php");
        $conn -> close();
    } 
?>