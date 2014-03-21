<?php
header('Content-Type: text/html; charset=utf8');
echo "<pre>";
//var_dump($_POST);
sleep(0);
// quando preencher o input de name="name"
//ele vai colocar no array $_POST (por que o metodo e post)
//um indice nome com o valor que o usuario digitou
if (count ($_POST)>0){

	foreach ($_POST as $name => $valor) {
		echo "o campo {$name} tem o <b>{$valor}</b><br/>";
	}


	echo "prencher o formulario";
}

?>

<form method="POST">
	
	<input  placeholder="nome" type="Text" name="name"> <br/>
	<input  placeholder="curso" type="Text" name="curso"> <br/>
	<input  placeholder="sexo" type="Text" name="sexo"> <br/>
	<input  placeholder="sobrenome" type="Text" name="sobrenome"> <br/>
	<input type="submit" name="Enviar"> <br/>

</form>