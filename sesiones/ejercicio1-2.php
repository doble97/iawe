<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-2</title>
</head>
<body>
    <?php
        echo "<a href='ejercicio1.php'> Volver a la página anterior</a> </br>";
        $correct_pass="123456";
        $user_pass = $_GET["pass"];
        if($correct_pass==$user_pass ){
            echo "<p>Contraseña correcta</p>";
            $_SESSION["user"] = $_GET["user"];
            $_SESSION["pass"] = $user_pass;
            echo "<a href='ejercicio1-3.php'> Ir a página 3</a>";
        }
    ?>
</body>
</html>