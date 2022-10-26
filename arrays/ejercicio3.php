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

echo "<table>";
foreach ($colores as $k => $tipo) {
    echo "<tr><td>Colores $k:</td>";
    foreach ($tipo as $codigo => $color) {
        echo "<td
		bgcolor=\"$color\">" . $codigo . ":" . $color . "<td>";
    }
    echo "</tr>";
}
echo "</table>";
?>