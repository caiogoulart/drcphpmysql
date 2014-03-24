<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	
	<form method="post">


	 	Nome <input type="text" name="Nome"><br>
	 	Sobrenome <input type="text" name="Sobrenome"><br>
	 	Idade <input type="text" name="Idade"><br>
	 	Sexo <input type="text" name="Sexo"><br>

	 	<input type="submit" value="Enviar">
	
	</form>

<?php

	foreach ($_POST as $cadast) {
		var_dump($cadast);
	}

?>
	
</body>
</html>