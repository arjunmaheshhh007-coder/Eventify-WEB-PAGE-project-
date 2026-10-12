CREATE DATABASE IF NOT EXISTS eventify_db;
USE eventify_db;

CREATE TABLE IF NOT EXISTS event_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);