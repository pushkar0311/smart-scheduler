<?php
include('connectiondb.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    $sql = "SELECT * FROM employee WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $mobile_number = $row['mobile_number'];
        $department = $row['department'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.hdqwalls.com/download/rave-cube-abstract-4k-g6-1366x768.jpg'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .label {
            display: block;
            margin-bottom: 8px;
        }

        .input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .button {
            background-color: #5334ab;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #422280;
        }

    </style>
</head>
<body>

    <div class="container">
    <img src="https://i0.wp.com/vssmn.org/wp-content/uploads/2018/12/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png?fit=860%2C681&ssl=1" alt="Profile Picture" style="width: 200px; height: 200px; border-radius: 50%;">
        <h1><?php echo $name; ?></h1>
        <label class="label">Email ID:</label>
        <p class="input"><?php echo $email; ?></p>
        <label class="label">Mobile Number:</label>
        <p class="input"><?php echo $mobile_number; ?></p>
        <label class="label">Department:</label>
        <p class="input"><?php echo $department; ?></p>
        
    </div>

</body>
</html>

<?php
    } else {
        echo "Employee details not found.";
    }
} else {
    echo "Email not provided.";
}
$conn->close();
?>
