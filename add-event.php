<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
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
        <h1>Add New Event</h1>

        <form action="insert_event.php" method="POST" onsubmit="return validateForm()">

            <label for="event_name">Event Name:</label>
            <input type="text" id="event_name" name="event_name">

            <label for="event_date">Date:</label>
            <input type="date" id="event_date" name="event_date">

            <label for="location">Location:</label>
            <input type="text" id="location" name="location">

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>

            <button type="submit">Add Event</button>
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>