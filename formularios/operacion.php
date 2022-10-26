<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h1>Tipo de operacion: ".$_POST["operaciones"]."</h1>";

        $operaciones =  [
            "sumar"=> function($x, $y){
                return $x+$y;
            },
            "restar"=> function($x,$y){
                return $x-$y;
            },            
            "multiplicar"=> function($x,$y){
                return $x*$y;
            },          
            "dividir"=> function($x,$y){
                return $x/$y;
            }
        ];
        echo "<p>Resultado de ".$_POST["operaciones"]." ".$_POST["num1"]." y ".$_POST["num2"]."</p>";
        echo "<p>".$operaciones[$_POST["operaciones"]]($_POST["num1"],$_POST["num2"])."</p>";
    ?>
</body>
</html>