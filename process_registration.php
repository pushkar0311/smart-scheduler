<?php
include('connectiondb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch data from registration form
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $mobile_number = $_POST["mobile_number"];
    $gender = $_POST["gender"];

    // Insert data into the 'employee' table
      $sql = "INSERT INTO employee (name, email, password, gender, department, mobile_number) 
            VALUES ('$name', '$email', '$password', '$gender', '$department', '$mobile_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
