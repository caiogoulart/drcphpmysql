<?php
//function divisao ($n1 , $n2){
//return $n1 / $n2;

//(10,2);

//function multiplica($n3 , $n4){
//	return $n3 * $n4;
//}
//echo multiplica(5 ,5);

/*function soma3($v , $v1 , $v2){
	return $v + $v1 + $v2;
}
echo soma3(1 , 3 ,4);

function pessoa($nome , $sexo , $idade){
	return array 

}
function comparanome($pessoa , $nome)
	return array 

	}

function eMenor($numero1, $numero2){
	if ($numero1>$numero2){
		return $numero2;
	}else{
		return $numero1;
	}
}
$numero1 = 2;
$numero2 = 3;

var_dump(eMenor(10,1));


function eMaior($n1, $n2){
	if($n1<$n2){
		return $n2;
	}else if($n2>$n1){
		return $n1;
	}
}

$n1 = 10;
$n2 = 20;
var_dump ($eMaior);
*/


//function contarTexto($texto){
//	return "O texto {$texto} tem" .strlen($texto). " caracterer";
//}

//echo contarTexto("caio goulart");

//function dado duas palavras, qual dela tem mais caracteres.

function comparaMaior($texto1 , $texto2){
	if (strlen($texto1) > strlen($texto2)){
		return "o texto {$texto1} tem mais carcteres que {texto2} ";
	}else if(strlen($texto2) < strlen($texto1)){
		return "o texto {$texto2} tem mais carcteres que {texto1} ";
	}
}
echo comparaMaior("caiogoulartt","goulart");
?>

