<?php 

//kontrollib kas legele satuti GET
// või POST päringu abil

	$isSubmitted = isset($_POST['submit']);

	if ($isSubmitted) {
		$username = $_POST['username'];

	}

	if (!isset($username)) || $username == "") {
		$usernameMessage = "Palun sisestada kasutajanimi";

 	}
 	else {
 		$usernameMessage = "kasutajanimi sobis";
 	}


 ?>