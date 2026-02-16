<?php
include 'config.php';

// 1. Check if an ID was sent via the URL
if (isset($_GET['id'])) {
    $studentID = $_GET['id'];

    // 2. Prepare the DELETE SQL command
    $sql = "DELETE FROM student WHERE studentID = $studentID";

    // 3. Execute the query
    if ($conn->query($sql) === TRUE) {
        // If successful, go back to the main page immediately
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // If someone tries to open delete.php without an ID, send them back
    header("Location: index.php");
    exit();
}
?>