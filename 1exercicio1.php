<?php
header('Content-Type: text/html; charset=utf8');
echo "<pre>";
//var_dump($_POST);
sleep(0);
// quando preencher o input de name="name"
//ele vai colocar no array $_POST (por que o metodo e post)
//um indice nome com o valor que o usuario digitou
if (count ($_POST)>0){
	
	if ($_POST['name'] == ""){
			$_POST['name'] = 'nao preenchido';
	} 		

	if ($_POST['curso'] == ""){
		  $_POST['curso'] = 'nao preenchido';
	
	}
	if ($_POST['sexo'] == ""){
		  $_POST['sexo'] = 'nao preenchido';
	
	}
	if ($_POST['sobrenome'] == ""){
		  $_POST['sobrenome'] = 'nao preenchido'; 
	}


	echo "o Nome e: ".$_POST['curso']."<br/>";
	echo "o Nome do curso: ".$_POST['curso']."<br/>";
	echo "o seu sexo e: ".$_POST['sexo']."<br/>";
	echo "o seu sobrenome: ".$_POST['sobrenome']."<br/>";
/*
	echo  "O nome da pessoa e : " . ($_POST['name']);
	echo  "e faz o curso de : " . ($_POST['curso']);
	echo  "e seu sexo e : " . ($_POST['sexo']);
	echo  "e seu sobrenome 'e :" . ($_POST['sobrenome']);*/
} else {
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