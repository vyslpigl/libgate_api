<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is blank
$database = "libgate_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection and return JSON error if it fails
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed"]));
}
?>