<?php
// Include config file
require_once "../config.php";

// Processing form data when form is submitted
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Prepare an update statement
    $sql = "UPDATE products SET name='{$_POST["name"]}', address='{$_POST["address"]}', salary='{$_POST["salary"]}' WHERE id='{$_POST["id"]}'";
    // echo $sql;
    if (mysqli_query($link, $sql)) {
        echo "Records Updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    header("location: index.php");

    // Close statement
    // mysqli_stmt_close($stmt);

    // Close connection
    // mysqli_close($link);
}