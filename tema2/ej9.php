<?php
// Usando los tres siguientes arrays:  $ar2 = array ("bo","ca","me","ta","tre","sal");  $ar5 = array (0,1,3);  $ar6 = array (1,4);
// Se debe mostrar en dos párrafos la conjunción de las sílabas del ar2 que indiquen las posiciones de ar5 y ar6, esto es "bocata" y "catre".
$ar2 = array ("bo","ca","me","ta","tre","sal");
$ar5 = array (0,1,3);
$ar6 = array (1,4);
$a = "";
$b = "";
foreach($ar5 as $value){
    $a = $a.$ar2[$value];
}

foreach($ar6 as $value){
    $b = $b.$ar2[$value];
}
echo "<p>$a</p>";
echo "<p>$b</p>";
?>