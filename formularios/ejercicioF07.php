<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicioF07.php" method="post">
        <label for="correo">Correo electrónico</label>
        <input type="text" name="correo" id="correo">
        <br>
        <br>
        <input type="submit" value="comprobar">
    </form>
    <?php
        $correo = $_POST["correo"];
        $expresion = "/^[a-z]+([0-9]{0,}\.*[a-z]{0,})*@[a-z]+\.[a-z]+$/i";
        $respuesta = "";
        if(isset($correo) and strlen($correo)>=5){
            if(preg_match($expresion, $correo)==1){
                $dominio = substr($correo,strpos($correo, "@"));
                $usuario = str_replace($dominio, "", $correo);
                $dominio = str_replace("@","", $dominio);
                $respuesta = "<h1>Usuario: $usuario</h1> <h1>Dominio: $dominio</h1>";
                
            }
        }else{
            $respuesta = "<h1>Correo no valido</h1>";
        }
        echo $respuesta;
    ?>
</body>
</html>