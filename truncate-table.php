<?php

require "config.php";

use App\PetRecord;

try {
	PetRecord::clearTable();
	echo "<li>Truncated table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

