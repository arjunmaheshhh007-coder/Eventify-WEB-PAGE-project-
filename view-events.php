<?php
$conn = new mysqli("localhost", "root", "", "eventify_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM event_details ORDER BY event_date ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .events-container {
            width: 90%;
            margin: 40px auto;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .page-title {
            text-align: center;
            margin-top: 50px;
            font-size: 42px;
        }

        .no-events {
            text-align: center;
            font-size: 22px;
            margin-top: 30px;
        }
    </style>
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

    <h1 class="page-title">All Events</h1>

    <div class="events-container">
       <?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['event_name'] . "</td>
                <td>" . $row['event_date'] . "</td>
                <td>" . $row['location'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>
                    <a href='edit-event.php?id=" . $row['id'] . "' 
                        class='edit-btn'>Edit
                    </a>
                    <a href='delete-event.php?id=" . $row['id'] . "'
                        class='delete-btn'
                        onclick='return confirm(\"Are you sure you want to delete this event?\")'>
                        Delete
                    </a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p class='no-events'>No events found.</p>";
}
?>
    </div>

</body>
</html>