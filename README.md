# Eventify — Event Management Website

## About the Project

Eventify is a web application designed to help users manage and explore student events through a simple, user-friendly website.

The application provides pages for viewing event categories, adding events and managing stored event information. It was developed as part of my first-year Computer Science studies at Cardiff Metropolitan University.

## Technologies Used

- **HTML5** — webpage structure
- **CSS3** — styling and layout
- **JavaScript** — client-side form validation
- **PHP** — server-side processing
- **MySQL** — event database
- **Apache** — local web server environment

## Features

- Home page featuring event categories
- About page describing the application
- Form for adding new events
- View events stored in the database
- Edit existing events
- Delete events with a confirmation prompt
- Display event details, including name, date, location and description
- Organise event information in a MySQL database

## Database Structure

The project uses a database named `eventify_db`, with an `event_details` table containing:

- Event ID
- Event name
- Event date
- Location
- Description

The SQL file included in the repository provides the database and table creation statements.

## Project Structure

```text
Eventify/
├── index.html
├── about.html
├── add-event.php
├── insert_event.php
├── view-events.php
├── edit-event.php
├── update-event.php
├── delete-event.php
├── style.css
├── script.js
├── eventify_db.sql
├── images/
└── README.md
```

## How to Run Locally

### Requirements

- PHP
- MySQL
- Apache or another compatible local web server

A local environment such as XAMPP can provide these components.

### Setup instructions

1. Install and start Apache and MySQL in your local development environment.
2. Place the Eventify project folder in your web server's document root.
3. Open phpMyAdmin or a MySQL client.
4. Import `eventify_db.sql` to create the database and table.
5. Review the database connection settings in the PHP files and configure them for your local environment.
6. Start the application through your local web server, for example:

```text
http://localhost/Eventify/
```

Do not open the PHP files directly as local files in your browser. They need a PHP-enabled web server.

## What I Learned

- Structuring webpages with HTML
- Styling layouts with CSS
- Adding client-side validation with JavaScript
- Processing form submissions using PHP
- Connecting a website to a MySQL database
- Performing database operations
- Organising a multi-page web application

## Future Improvements

- Improve server-side input validation
- Use prepared SQL statements consistently
- Escape output to help prevent cross-site scripting (XSS)
- Add user authentication and authorisation
- Improve responsive design and accessibility
- Deploy the application to a suitable hosting environment

## Academic Context

**Course:** BSc (Hons) Computer Science  
**University:** Cardiff Metropolitan University  
**Project:** First-year web design and databases project

This repository showcases my early experience building database-driven web applications.
