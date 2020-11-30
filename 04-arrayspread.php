<?php
//Intercalando Listas de Bolos ou Intercalando Arrays
$lista1 = ['Leo', 'João', 'Maria'];
$lista2 = ['Patricia', 'Leandro', 'Luiz'];
$lista3 = [...$lista1, 'fulano', ...$lista2, 'Renato'];

print_r($lista3);