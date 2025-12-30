<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "projectpaw_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed");
}
?>
