<?php
include 'config.php';

if (isset($_GET['id'])) {
    $studentID = $_GET['id'];
    $sql = "SELECT * FROM student WHERE studentID = $studentID";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head> <title>Edit Student</title> </head>
<body>
<h2>Edit Student</h2>
<form method="POST" action="update.php">
    <label>Student ID:</label><br>
    <input type="text" value="<?php echo $row['studentID']; ?>" disabled>
    <br><br>
    <input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">

    <label>First Name:</label><br>
    <input type="text" name="firstName" value="<?php echo $row['firstName']; ?>" required><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="lastName" value="<?php echo $row['lastName']; ?>" required><br><br>

    <label>Birth Date:</label><br>
    <input type="date" name="birthDate" value="<?php echo $row['birthDate']; ?>"><br><br>

    <label>City:</label><br>
    <input type="text" name="city" value="<?php echo $row['city']; ?>"><br><br>

    <label>Enrolled Year:</label><br>
    <input type="number" name="enrolledYear" value="<?php echo $row['enrolledYear']; ?>"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

    <label>Course Name:</label><br>
    <input type="text" name="courseName" value="<?php echo $row['courseName']; ?>"><br><br>

    <input type="submit" value="Update Student">
</form>
</body>
</html>