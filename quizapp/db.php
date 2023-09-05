<?php
$hostname = 'localhost';
$username = 'root';
 
$database = 'php-kuiz';

$conn = new mysqli($hostname, $username, "", $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>