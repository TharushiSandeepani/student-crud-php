<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate']; // New
    $email = $_POST['email'];
    $city = $_POST['city'];           // New
    $courseName = $_POST['courseName'];
    $enrolledYear = $_POST['enrolledYear']; // New

    // Update SQL with new fields
    $sql = "UPDATE student SET 
            firstName='$firstName', 
            lastName='$lastName', 
            birthDate='$birthDate',
            email='$email', 
            city='$city',
            courseName='$courseName',
            enrolledYear='$enrolledYear'
            WHERE studentID=$studentID";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully. <a href='index.php'>Go back</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>