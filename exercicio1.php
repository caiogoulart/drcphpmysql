<?php
/*
// logica IF then 

//var integral
$idadeDaMenorIdade = 17; 
$idadeDaMaiorIdade = 18; 

/* Se idade e maior ou igual a 18 , diga adulta
operador de comparacao: >= 

if ($idade >= $idadeDaMaiorIdade )
	echo "E adulta\n";

//if then else: Se ENtao senao
if ($idade >= $idadeDaMaiorIdade ){
	echo "E adulta\n";
} else {
	echo "nao e adulta";
}

 var_dump( $idade >= $idadeDaMaiorIdade );
*/


//utilizando IF then Else Se ENtao senao
 //escreva ela loira do olhos azuis 
 //ela negra dos olhos verdes

 $sexo = "feminino";
 $corDoCabelo = "negros";
 $corDosOlhos = "verdes";

 if ($sexo == "feminino"){
 	if($corDoCabelo == "loira"){
 		if($corDosOlhos == "azul"){
 			echo "ELa loira do olhos azuis\n";
 		}
 }

 	if ($corDoCabelo == "negros"){
 		if ($corDosOlhos == "verdes")
 			echo "ela e negra dos olhos verdes\n";
 	}	
 }

?>