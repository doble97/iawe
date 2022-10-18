<?php
//Crear una función que pinte solo los elementos de un array que estén por encima de un número. Sustituir en el ejercicio 8 la parte correspondiente por esta función.
function calcular_media2($arr){
    $media = array_sum($arr)/ count($arr);
    return $media;
}

function mayor_media($arr, $media){
    $result = "";
    foreach($arr as $value){
        if($value>$media){
            $result = $result.$value.":";
        }
    }
    $result = rtrim($result,':');
    echo "<p>$result</p>";
}
$ar1 = array(4,12,-5,8,13,-9,0,3);
$ar2 = array(1,-2,3,-6,4,12,-7,-8);
$media1=calcular_media2($ar1);
$media2=calcular_media2($ar2);

echo "<h5>Primera media $media1</h5>";
mayor_media($ar1,$media1);

echo "<h5>Segunda media $media2</h5>";
mayor_media($ar2, $media2);
?>