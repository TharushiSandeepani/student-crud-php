# Student Management System (PHP CRUD)

A lightweight web application for managing student records. This project demonstrates full **Create, Read, Update, and Delete (CRUD)** functionality using vanilla PHP and MySQL.

## 📌 Features

* **View Students:** Displays a comprehensive list of students including ID, Name, Email, Course, and City.
* **Add Student:** Manual entry of Student IDs (e.g., Registration Numbers) with validation for duplicate keys.
* **Edit Records:** Update student details such as course, city, or email.
* **Delete Records:** Remove student entries from the database.
* **Audit Trail:** Tracks who created the record (e.g., "Created By: Admin").

## 🛠️ Technologies Used

* **Frontend:** HTML5, CSS3 (Basic styling)
* **Backend:** PHP (Vanilla)
* **Database:** MySQL
* **Server:** Apache (XAMPP for local development)

## 🚀 Installation & Setup

### 1. Database Setup
1. Open **phpMyAdmin**.
2. Create a new database named `student_db`.
3. Run the following SQL command to create the table:

```sql
CREATE TABLE student (
    studentID int(11) NOT NULL PRIMARY KEY,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    birthDate varchar(50) DEFAULT NULL,
    email varchar(50) DEFAULT NULL,
    city varchar(50) DEFAULT NULL,
    courseName varchar(50) DEFAULT NULL,
    enrolledYear varchar(50) DEFAULT NULL,
    createdBy varchar(50) NOT NULL
);

```

### 2. Configuration

1. Clone this repository to your `htdocs` folder.
2. Open `config.php`.
3. Update the database credentials to match your environment:

```php
$servername = "localhost";
$username = "root";      // Default XAMPP user
$password = "";          // Default XAMPP password
$dbname = "student_db";

```

### 3. Run the App

1. Start **Apache** and **MySQL** in XAMPP.
2. Open your browser and navigate to:
`http://localhost/student_crud/index.php`

## 📂 Project Structure

* `index.php` - Main dashboard listing all students.
* `add.php` - Form to insert new student records.
* `edit.php` - Form to modify existing records.
* `delete.php` - Script to handle record deletion.
* `config.php` - Database connection settings.

## 📝 License

This project is open-source and available for educational purposes.

