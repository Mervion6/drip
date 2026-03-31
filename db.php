<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// This looks for Render variables; if not found, it uses your local "localhost" settings.
$host = getenv('DB_HOST') ?: "db";
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') ?: "root"; 
$db   = getenv('DB_NAME') ?: "driptee_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
