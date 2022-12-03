<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(isset($_SESSION["resetear"])){
            session_destroy();
            session_start();
        }
        $intentos = 0;
        $adivinar = 0;
        if(isset($_SESSION["adivinar"])){
            $adivinar = $_SESSION["adivinar"];
        }else{
            $adivinar = random_int(1,10);
            $_SESSION["adivinar"] = $adivinar;
        }
        if(isset($_SESSION["intentos"])){
            $intentos = $_SESSION["intentos"];
        }else{
            $_SESSION["intentos"] = $intentos;
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $formulario = "<form action='ejercicio2.php' method='get'>
    <label for='numero'>Número: </label>
    <input type='number' name='numero' id='numero'>
    <br>
    <input type='submit' value='enviar'/>
    </form>";
    $numero = $_GET["numero"];
    if($adivinar == $numero ){
        echo "<h2>Has acertado el número: $adivinar</h2>";
        $_SESSION["resetear"] = true;
        echo "<a href='ejercicio2.php'>Volver a jugar</a>";
    }elseif($intentos<3){
        echo $formulario;
        echo "<p>Número de intentos: $intentos</p>";
        $intentos = $intentos+1;
        $_SESSION["intentos"] = $intentos;
    }else{
        echo "<h2>Has superado el numero de intentos, la respuesta era: $adivinar</h2>";
        echo "<p>Click en el siguiente enlace si quieres volver a jugar</p>";
        $_SESSION["resetear"] = true;
        echo "<a href='ejercicio2.php'>Volver a jugar</a>";
    }

    ?>
</body>
</html>