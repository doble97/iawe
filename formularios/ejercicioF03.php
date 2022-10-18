<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicioF03.php" method="get">
        <?php
           
            function crearForm($_intento, $_numero){
                echo "<h2>INTENTOS: $_intento";
                echo "<input type='number' name='respuesta'> ";
                echo "<input type='hidden' name='intento' value='$_intento' >";
                echo "<input type='hidden' name='num' value='$_numero' >";
                echo "<input type='submit' value='enviar'>";
            }
            $num = 0;
            $intento = 0;
            if(isset($_GET["num"]) and isset($_GET["intento"])){
                $num = $_GET['num'];
                $intento = $_GET['intento'];
                if($num==$_GET['respuesta'] and $intento<=3){
                    echo "<h2> HAS GANADO</h2>";
                }elseif ($intento>2){
                    echo "<h2> HAS PERDIDO</h2>";
                }else{
                    $intento = $intento +1;
                    crearForm($intento, $num);
                }

            }else{
                $num = rand(1,10);
                $intento = 0;
                crearForm($intento, $num);
            }
            
        ?>
    </form>
</body>
</html>