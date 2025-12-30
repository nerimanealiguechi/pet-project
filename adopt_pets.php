<?php
include("../config/db.php");

$query = "SELECT * FROM pets WHERE status='Available'";
$result = mysqli_query($conn, $query);
?>