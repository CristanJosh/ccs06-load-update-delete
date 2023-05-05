<?php

require "config.php";

use App\PetRecord;

$pet_id = $_GET['id'];

$pet = PetRecord::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet Records</title>
</head>
<body>
<h1>Edit Pets Information</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name</label>
		<input type="text" name="pet_name" placeholder="Pet Name" value="<?php echo $pet->getPetName();?>" />	
	</div>
	<div>
	<label>Gender</label>
	<input type="text" name="pet_gender" placeholder="Pet Gender" value="<?php echo $pet->getGender();?>" />
	<div>
		<label>BirthDate</label>
		<input type="date" name="birthdate" value="<?php echo $pet->getBirthdate();?>" />	
	</div>
	<div>
		<label>Owner Name</label>
		<input type="text" name="owner_name" placeholder="Owner Name" value="<?php echo $pet->getOwner();?>" />	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Your Address" value="<?php echo $pet->getAddress();?>" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />	
	</div>
	<div>
		<label>Contact</label>
		<input type="text" name="contact_number" placeholder="Your Mobile No." value="<?php echo $pet->getContactNumber();?>" />	
	</div><br>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>