<?php
$pet_id = $_GET['pet_id'];
?>

<form action="submit_adoption.php" method="POST">
  <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">

  <input type="text" name="first_name" placeholder="First Name" required>
  <input type="text" name="last_name" placeholder="Last Name" required>
  <input type="text" name="phone" placeholder="Phone Number" required>
  <input type="text" name="address" placeholder="Address" required>

  <textarea name="reason" placeholder="Why do you want to adopt this pet?" required></textarea>

  <label>
    Can you take care of this pet?
    <select name="can_take_care">
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select>
  </label>

  <button type="submit">Submit Adoption Request</button>
</form>

