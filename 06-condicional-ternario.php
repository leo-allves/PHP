<?php
$idade = 5;

//operador ternário ou oprador de condicional ternário é
//um If de uma linha somente.
/*
if($idade < 18) {
    echo 'Menor de idade';
} else {
    echo 'Maior de idade';
}
*/

//primeiro vem a (condição) depois vem a (?)
//para dizer que isso e um operador ternario
//ai da o comando ou o 
//(resultado positivo) : (resultado negativo);
//ex:
//(condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;


echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

//colocando o resultado numa variavel
$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';

//saber se o cara e maior de idade ou não e colocar um boolean
$menorDeIdade = ($idade < 18) ? true : false;

if($menorDeIdade) {
    echo 'MENOR';
} else { 
  echo 'MAIOR';
} 
