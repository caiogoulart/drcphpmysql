<!doctype html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title></title>

</head>
<body>

	
	<form method="post">


	 	Notas 1 Bimestre: <input type="text" name="b1"><br>
	 	Notas 2 Bimestre: <input type="text" name="b2"><br>
	 	Notas 3 Bimestre: <input type="text" name="b3"><br>
	 	Notas 4 Bimestre: <input type="text" name="b4"><br>

	 	<input type="submit" value="Submit">
	
	</form>

<?php

	foreach ($_POST as $nota) {
		var_dump($nota);
	}

?>
	
</body>
</html>