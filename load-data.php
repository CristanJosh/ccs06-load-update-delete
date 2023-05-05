<?php

require "config.php";

use App\PetRecord;

try {
	PetRecord::register('labs', 'male', '2020-06-12', 'Cris', '123 lab st','richard@feynman.com','09876543210' );
	echo "<li>Added 1 pet";
	$pets = [
		[
			'pet_name' => 'Cooper',
			'pet_gender' => 'male',
			'birthdate' => '2019-12-25',
			'owner_name' => 'Albert',
			'address' => '143 mahal street',
			'email' => 'albert@einstein.com',
			'contact_number' => '09192979729'
		],
		[
			'pet_name' => 'bebang',
			'pet_gender' => 'female',
			'birthdate' => '2018-01-18',
			'owner_name' => 'Josh',
			'address' => 'mabiga city',
			'email' => 'josh@gmail.com',
			'contact_number' => '09630484339'
		]
	];
	
	PetRecord::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

