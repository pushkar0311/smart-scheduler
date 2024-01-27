<?php
include('connectiondb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch data from login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the credentials match in the 'employee' table
    $sql = "SELECT * FROM employee WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        header("Location: welcome.php?email=$email");
        // You may redirect the user to another page or perform additional actions here
    } else {
        // Login failed
        echo "Invalid credentials. Please try again.";
    }
}

$conn->close();
?>
