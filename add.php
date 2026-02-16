<?php
include 'config.php'; // Make sure this matches your file name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID']; 
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $courseName = $_POST['courseName'];
    $enrolledYear = $_POST['enrolledYear'];
    
    // Replace with your actual name
    $createdBy = "Tharushi Fernando"; 

    // 2. Update INSERT query to include studentID
    $sql = "INSERT INTO student (studentID, firstName, lastName, birthDate, email, city, courseName, enrolledYear, createdBy)
            VALUES ('$studentID', '$firstName', '$lastName', '$birthDate', '$email', '$city', '$courseName', '$enrolledYear', '$createdBy')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        // This will show an error if you try to use an ID that already exists!
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head> <title>Add Student</title> </head>
<body>
<h2>Add New Student</h2>
<form method="post" action="add.php">
    
    <label>Student ID:</label><br> 
    <input type="number" name="studentID" required placeholder="e.g. 2026001"><br><br>

    <label>First Name:</label><br> <input type="text" name="firstName" required><br><br>
    <label>Last Name:</label><br> <input type="text" name="lastName" required><br><br>
    <label>Birth Date:</label><br> <input type="date" name="birthDate"><br><br>
    <label>City:</label><br> <input type="text" name="city"><br><br>
    <label>Enrolled Year:</label><br> <input type="number" name="enrolledYear"><br><br>
    <label>Email:</label><br> <input type="email" name="email"><br><br>
    <label>Course Name:</label><br> <input type="text" name="courseName"><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>