<?php
// logica IF then 

//var integral
$idadeDaMenorIdade = 17; 
$idadeDaMaiorIdade = 18; 

/* Se idade e maior ou igual a 18 , diga adulta
operador de comparacao: >= 
*/
if ($idade >= $idadeDaMaiorIdade )
	echo "E adulta\n";

//if then else: Se ENtao senao
if ($idade >= $idadeDaMaiorIdade ){
	echo "E adulta\n";
} else {
	echo "nao e adulta";
}

 var_dump( $idade >= $idadeDaMaiorIdade );

?>