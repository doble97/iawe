<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/ejercicio5.css">
</head>
<body>
    <div
        <?php 
            $estilo = "";
            if(isset($_GET["fondo"])){
                $estilo = "contenedor fondo-".$_GET["fondo"]." letra-".$_GET["letra"]." ";
            }
            if(isset($_GET["cursiva"])){
                $estilo = $estilo." cursiva";
            }
            if(isset($_GET["negrita"])){
                $estilo = $estilo." negrita";
            }
            $estilo = "class='$estilo'";
            echo $estilo;
        ?>
    >
        <form action="ejercicioF05.php" method="get">
            <label for="fondo">Color fondo</label>
            <select name="fondo" id="fondo" size="3" required>
                <option value="red">rojo</option>
                <option value="green">verde</option>
                <option value="blue">azul</option>
            </select>
            <br>
            <br>
            <label for="letra">Color letra</label>
            <select name="letra" id="letra" size="3" required>
                <option value="red">rojo</option>
                <option value="green">verde</option>
                <option value="blue">azul</option>
            </select>
            <br>
            <br>
            <h3>Estilo de letra</h3>
            <input type="checkbox" name="negrita" id="negrita"
            <?php
                    if(isset($_GET["negrita"])){
                        echo "checked";
                    }
                    
                ?>
            >
            <label for="negrita">Negrita</label>
            <input type="checkbox" name="cursiva" id="cursiva"
                <?php
                    if(isset($_GET["cursiva"])){
                        echo "checked";
                    }
                    
                ?>
            >
            <label for="cursiva">Cursiva</label>
            <br>
            <br>
            <input type="submit" value="aplicar">
            
        </form>
    </div>

</body>
</html>