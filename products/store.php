<?php
// Include config file
require_once "../config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Prepare an insert statement
    $sql = "INSERT INTO products (name, address, salary) VALUES ('{$_POST["name"]}','{$_POST["address"]}', '{$_POST["salary"]}')";
    // echo $sql;
    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    header("location: index.php");

    // Close connection - manually
    // mysqli_close($link);
}