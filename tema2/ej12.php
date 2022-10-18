<?php
function calcular_interes($dinero, $interes, $anios){
    $total=$dinero;
    echo "$total:\n";
    for($i = 0; $i<$anios; $i++){
        $dinero_interes = ($total*$interes)/100;
        $total = round($total + $dinero_interes, 2);
        echo "$total";
        if ($i+1<$anios){
            echo "-->\n";
        }
    }
}

calcular_interes(100,20,5);
echo"</br>";
calcular_interes(100,10,7);
echo"</br>";
calcular_interes(100,50,3);
echo"</br>";
calcular_interes(100,59,2);
echo"</br>";
calcular_interes(100,2,10);

?>