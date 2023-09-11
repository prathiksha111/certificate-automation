<?php
// Connect to the database
include('../includes/dbconfig.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$user_id = $_POST['student_id'];
$password = $_POST['password'];

// Query the database for the user
$sql = "SELECT * FROM student WHERE usn = '$user_id' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, you can redirect to a success page or perform other actions
    header("Location: status.php");
} else {
    // User not found, show an error message on the login page
    header("Location: ../index.php");
}

$conn->close();
?>
