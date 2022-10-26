<?php
function mostrar($_pila, $tipo_ordenamiento){
    echo "<h2>$tipo_ordenamiento</h2>";
    foreach($_pila as $key=>$value){
        echo "<p>$key=>$value";
    }
}
$pila =array("cinco" =>5,"uno"=>1, "cuatro" =>4,"dos" =>2 , "tres" =>3);
asort($pila);
mostrar($pila,"ASORT");
arsort($pila);
mostrar($pila, "ARSORT");
ksort($pila);
mostrar($pila, "KSORT");
sort($pila);
mostrar($pila, "SORT");
rsort($pila);
mostrar($pila, "RSORT");
?>