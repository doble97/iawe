<?php
$colores = array(
    "fuertes" => array(
        "rojo" => "FF0000",
        "verde" => "00FF00",
        "azul" => "0000FF"
    ),
    "suaves" => array(
        "rosa" => "FE9ABC",
        "amarillo" => "FDF189",
        "malva" => "BC8F8F"
    )
);

$comprobar = array("FF0000" => false, "FF88CC" => false);
foreach ($colores as $tipo) {
    if (in_array("FF0000", $tipo)) {
        $comprobar["FF0000"] = true;
    }
    if (in_array("FF88CC", $tipo)) {
        $comprobar["FF88CC"] = true;
    }
}
foreach ($comprobar as $key => $value) {
    if ($value) {
        echo "<p style='background-color:#$key;'>Se ha encontrado el siguiente color: $key</p>";
    }
}
?>
