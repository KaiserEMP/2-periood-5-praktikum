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
		Kasutaja nimi: <input type="text" name="username"></input>

		<input type="submit" value="Saada" name="submit" ></input>
</form>

</body>
</html>