<?php require('validation.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>praktikum 2.5</title>
</head>
<body>

<form action="index.php" method="post">
		<?php if ($isSubmitted) {
			echo $usernameMessage;
			}
			?>
		Kasutaja nimi: <input type="text"></input>

		<input type="submit" value="Saada"></input>
</form>

</body>
</html>