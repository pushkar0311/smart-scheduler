<?php
include('connectiondb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Room Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/000/598/410/non_2x/light-blue-vector-low-poly-crystal-background-polygon-design-pa.jpg'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        button {
            background-color: #5334ab;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #422280;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="room_book.php" method="post">
            <label for="roomNumber">Room Number:</label>
            <select id="roomNumber" name="roomNumber" required>
                <?php
                 // Include your database connection logic here

                 // Fetch room numbers from the database
                 $sql = "SELECT room_number FROM rooms";
                 $result = $conn->query($sql);

                 // Populate dropdown options
                 while ($row = $result->fetch_assoc()) {
                     echo "<option value='" . $row['room_number'] . "'>" . $row['room_number'] . "</option>";
                 }

                 $conn->close();
                ?>
            </select>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="batch">Select Batch:</label>
            <select id="batch" name="batch" required>
                <option value="batch1">Batch 1</option>
                <option value="batch2">Batch 2</option>
                <!-- Add more batches as needed -->
            </select>

            <button type="submit">Book Room</button>
        </form>
    </div>

</body>

</html>
