<?php 

//kontrollib kas legele satuti GET
// või POST päringu abil

	$isSubmitted = isset($_POST["submit"]);
	$username = $_POST['username'];

  if (isset($username) || $username == "" ) {

    $usernameMessage = '<div class="form-message">Täname korrektselt sisestatud nime eest!</div>';

  } else {

    $usernameMessage = '<div class="form-message">Nime väli ei vasta nõuetele</div>';
  }















/*
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

*/
 ?>