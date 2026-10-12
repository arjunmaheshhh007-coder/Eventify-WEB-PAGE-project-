<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "eventify_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = "DELETE FROM event_details WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            header("Location: view-events.php");
            exit();
        } else {
            echo "No event found with that ID.";
        }
    } else {
        echo "SQL Error: " . $conn->error;
    }
} else {
    echo "No event ID provided.";
}

$conn->close();
?>