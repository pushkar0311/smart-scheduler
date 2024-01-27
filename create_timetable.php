<?php
include('connectiondb.php');

$data = json_decode(file_get_contents("php://input"), true);

foreach ($data as $order => $subject) {
    $sql = "UPDATE timetable SET display_order = '$order' WHERE subject = '$subject'";
    $conn->query($sql);
}

$conn->close();
?>
