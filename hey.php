<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input {
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Library Management System</title>
</head>
<body>
    <div class="container">
        <h2>Student Details Form</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $studentName = $_POST["student_name"];
            $studentID = $_POST["student_id"];
            $bookTitle = $_POST["book_title"];
            $dueDate = $_POST["due_date"];

            // Perform any necessary validation and database operations here
            // For simplicity, we'll just echo the submitted data.
            echo "Student Name: $studentName<br>";
            echo "Student ID: $studentID<br>";
            echo "Book Title: $bookTitle<br>";
            echo "Due Date: $dueDate<br>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="student_name">Student Name:</label>
            <input type="text" id="student_name" name="student_name" required>

            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>

            <label for="book_title">Book Title:</label>
            <input type="text" id="book_title" name="book_title" required>

            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
