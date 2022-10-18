<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="pal1">Palabra 1</label>
    <input type="text" name="pal1" id="pal1" required>
    <br>
    <label for="pal2">Palabra 2</label>
    <input type="text" name="pal2" id="pal2" required>
    <br>
    <br>
    <input type="submit" value="comprobar">
    </form>
    <?php
        if(isset($_POST["pal1"]) and isset($_POST["pal2"])){
            echo "<div>";
            $pal1 = substr($_POST["pal1"],-3,3);
            $pal2 = substr($_POST["pal2"],-3,3);
            if($pal1==$pal2){
                echo "<h2>Las palabras riman</h2>";
            }else{
                echo "<h2>Las palabras no riman</h2>";
            }
        }
    ?>
</body>
</html>