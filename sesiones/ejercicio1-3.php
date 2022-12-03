<!DOCTYPE html>
<?php
session_start();
if (!(isset($_SESSION["user"]))) {
    header("Location: ejercicio1.php");
    die();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido a la página 3: </h1>
    <?php
    echo $_SESSION["user"];
    echo "<br>";
    $user = $_SESSION["user"];
    $_SESSION["cerrar"] = true;
    echo "<a href='ejercicio1.php'> Cerrar sesion</a>";
    ?>
</body>

</html>