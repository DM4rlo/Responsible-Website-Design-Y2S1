<?php
    include "dbconn.php";

    $userID = $_POST['empID'];
    
    // Update Customer Record
    $sql = "DELETE FROM employee WHERE employeeID=$userID";

    if($conn->query($sql) === TRUE) {
        $conn->close();

        header("Location:employees.php");
        exit();
    }

    echo "Error: " . $sql . "<br>" . $conn->error;
?>