<?php
// Database connection parameters
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "Student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("CREATE TABLE IF NOT EXISTS students (
    id INT UNSIGNED AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    dob DATE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    father_name VARCHAR(50) NOT NULL,
    mother_name VARCHAR(50) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    department VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
)");
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $fatherName = $_POST["fatherName"];
    $motherName = $_POST["motherName"];
    $bloodGroup = $_POST["bloodGroup"];
    $department = $_POST["department"];

    // Insert data into the database
    $sql = "INSERT INTO students(first_name, last_name, email, gender, dob, phone, address, father_name, mother_name, blood_group, department) VALUES ('$firstName', '$lastName', '$email', '$gender', '$dob', '$phone', '$address', '$fatherName', '$motherName', '$bloodGroup', '$department')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
