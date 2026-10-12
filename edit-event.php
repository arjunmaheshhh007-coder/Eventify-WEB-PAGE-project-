<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "eventify_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_GET['id'])) {
    die("No event ID provided.");
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM event_details WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Event not found.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <h2>Eventify</h2>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="add-event.php">Add Event</a></li>
        <li><a href="view-events.php">View Events</a></li>
        <li><a href="about.html">About</a></li>
    </ul>
</nav>

<section class="hero">
    <h1>Edit Event</h1>

    <form action="update-event.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="event_name">Event Name</label>
        <input type="text" id="event_name" name="event_name" value="<?php echo $row['event_name']; ?>" required>

        <label for="event_date">Date</label>
        <input type="date" id="event_date" name="event_date" value="<?php echo $row['event_date']; ?>" required>

        <label for="location">Location</label>
        <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea>

        <button type="submit">Update Event</button>
    </form>
</section>

</body>
</html>

<?php
$conn->close();
?>