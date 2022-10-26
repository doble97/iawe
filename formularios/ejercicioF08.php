<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="operacion.php" method="post">
        <label for="num1">Campo 1</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Campo 2</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <select name="operaciones" id="operacions">
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <br>
        <input type="submit" value="hacer operación">
    </form>
</body>
</html>