<?php
    if ($_GET["email"]=="jorgegonzalez@gmail.com" and $_GET["password"]=="12345678"){
        echo "exito al coincidir";
    }else{
        echo "error, credenciales no coinciden";
        echo "<br>";
        echo "<button onclick='history.go(-1)'>Regresar</button>";
    }
?>