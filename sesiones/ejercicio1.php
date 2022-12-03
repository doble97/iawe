<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if (isset($_SESSION["cerrar"])){
            session_destroy();
        }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="ejercicio1-2.php" method="GET">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="entrar">
    </form>
</body>
</html>