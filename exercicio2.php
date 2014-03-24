<?php
/*
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
*/

/*
dados 4 valores de notas bimestrais $b1 , $b2 , $b3 , $b4 
e a media para passar de ano e 7 
	
	se for maior ou igual a 7 
	escreva voce passou 
	se for menor que 7 e maior q 5 
		voce esta de recuperacao
	se for igual a 5 ou maior que 3 
		voce repetiu de ano 
	se for menor que 3
		voce voltou uma serie

*/



$b1 = 5;
$b2 = 5;
$b3 = 5;
$b4 = 5;
$media = $b1 + $b2 + $b3 + $b4/4;

if ( $media >= 7 ){
	echo "voce passou";
} 
if ($media < 7 ){
	if ($media >= 5){
		echo " voce esta de recuperacao";
	} 
}
if ($media == 5){
	if ($media > 3){
		echo " voce repetiu de ano";
	}
}
if ($media < 3){
		echo " Voce voltou uma serie";
	}


?>