<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "eventify_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['event_name'];
    $date = $_POST['event_date'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    $sql = "INSERT INTO event_details (event_name, event_date, location, description)
            VALUES ('$name', '$date', '$location', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Event added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Form was not submitted using POST.";
}

$conn->close();
?>