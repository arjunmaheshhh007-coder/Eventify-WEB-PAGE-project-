<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "eventify_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['id'];
    $name = $_POST['event_name'];
    $date = $_POST['event_date'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $sql = "UPDATE event_details 
            SET event_name='$name', event_date='$date', location='$location', description='$description'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view-events.php");
        exit();
    } else {
        echo "Error updating event: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>