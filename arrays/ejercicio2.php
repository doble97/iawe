<?php
    $alumnos = array("alexis", "luis", "jorge","david", "miguel");
    for($i = 0; $i<count(array_slice($alumnos,1,3)); $i++){
        echo $alumnos[$i];
        echo "<br>";

    }
    array_splice($alumnos,0,3);
    foreach($alumnos as $alumno){
        echo $alumno;
        echo "<br>";
    }
?>