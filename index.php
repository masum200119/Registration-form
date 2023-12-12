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

// SQL query to select all records from the 'students' table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Blood Group</th>
                <th>Department</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["dob"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["father_name"] . "</td>
                <td>" . $row["mother_name"] . "</td>
                <td>" . $row["blood_group"] . "</td>
                <td>" . $row["department"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
<a href="fff.htm">Add new student</a>
<a href="download.php">Download file</a>