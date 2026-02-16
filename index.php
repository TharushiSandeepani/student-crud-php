<?php
include 'config.php'; 
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Student List</h2>
<a href="add.php">Add New Student</a>
<br><br>

<table>
  <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birth Date</th> <th>Email</th>
        <th>City</th>       <th>Course</th>
        <th>Year</th>       <th>Created By</th> 
        <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["studentID"] . "</td>";
            echo "<td>" . $row["firstName"] . "</td>";
            echo "<td>" . $row["lastName"] . "</td>";
            echo "<td>" . $row["birthDate"] . "</td>";   // New
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";        // New
            echo "<td>" . $row["courseName"] . "</td>";
            echo "<td>" . $row["enrolledYear"] . "</td>"; // New
            echo "<td>" . $row["createdBy"] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $row["studentID"] . "'>Edit</a> | 
                    <a href='delete.php?id=" . $row["studentID"] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>No students found</td></tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>