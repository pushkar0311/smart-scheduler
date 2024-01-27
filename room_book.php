<?php
include('connectiondb.php');

// Get user input
$roomNumber = $_POST['roomNumber'];
$date = $_POST['date'];
$time = $_POST['time'];
$batch = $_POST['batch'];

// Check if the room is already booked for the given date and time
$sql_check_booking = "SELECT * FROM room_bookings WHERE room_number = '$roomNumber' AND date = '$date' AND time = '$time'";
$result_check_booking = $conn->query($sql_check_booking);

if ($result_check_booking->num_rows > 0) {
    echo "Room already booked for the selected date and time.";
} else {
    // If the room is not booked, insert the booking into the database
    $sql_book_room = "INSERT INTO room_bookings (room_number, date, time, batch) VALUES ('$roomNumber', '$date', '$time', '$batch')";

    if ($conn->query($sql_book_room) === TRUE) {
        echo "Room booked successfully!";
    } else {
        echo "Error: " . $sql_book_room . "<br>" . $conn->error;
    }
}

$conn->close();
?>
