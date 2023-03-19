<?php
// Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Include config file
    require_once "../config.php";

    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE id = '{$_POST["id"]}'";
    // echo $sql;
    if (mysqli_query($link, $sql)) {
        echo "Records Deleted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    header("location: index.php");

    // Close statement
    // mysqli_stmt_close($stmt);

    // Close connection
    // mysqli_close($link);
}