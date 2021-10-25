<?php
	include 'controllers/DonorController.php';
	$uname = $_GET["uname"];
	$donor = checkUsername($uname);
	if($donor){
		echo "invalid";
	}
	else echo "valid";

?>