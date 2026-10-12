function validateForm() {
    let eventName = document.getElementById("event_name").value;
    let eventDate = document.getElementById("event_date").value;
    let location = document.getElementById("location").value;
    let description = document.getElementById("description").value;

    if (eventName.trim() === "") {
        alert("Please enter the event name.");
        return false;
    }

    if (eventDate.trim() === "") {
        alert("Please select the event date.");
        return false;
    }

    if (location.trim() === "") {
        alert("Please enter the event location.");
        return false;
    }

    if (description.trim() === "") {
        alert("Please enter the event description.");
        return false;
    }

    return true;
}