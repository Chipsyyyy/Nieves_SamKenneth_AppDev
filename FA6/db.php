<?php
// db.php - Database connection (MySQLi Procedural)

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "dog_registry";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
