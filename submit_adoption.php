<?php
include("../config/db.php");

$pet_id = $_POST['pet_id'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$reason = $_POST['reason'];
$care = $_POST['can_take_care'];

mysqli_query($conn, "
  INSERT INTO adoptions 
  (pet_id, first_name, last_name, phone, address, reason, can_take_care)
  VALUES
  ('$pet_id', '$first', '$last', '$phone', '$address', '$reason', '$care')
");

mysqli_query($conn, "
  UPDATE pets SET status='Adopted' WHERE pet_id='$pet_id'
");

echo "Thank you for adopting! ❤️";
?>
