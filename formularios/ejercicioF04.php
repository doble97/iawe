<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./javascript/script.js"></script>
</head>
<body>
    <form onsubmit="cambiarMoneda(event)">
        <label for="divisa1">Desde: </label>
        <select name="divisa1" id="divisa1" size='4' required>
            <option value="euro">Euro</option>
            <option value="dolar">Dólar</option>
            <option value="libra">Libra</option>
            <option value="rublo">Rublo</option>
        </select>
        <br>
        <br>

        <label for="divisa2">Desde: </label>
        <select name="divisa2" id="divisa2" size='4' required>
            <option value="euro">Euro</option>
            <option value="dolar">Dólar</option>
            <option value="libra">Libra</option>
            <option value="rublo">Rublo</option>
        </select>
        <br>
        <br>
        <input type="number" name="valor" id="valor" required>
        <input type="submit" value="convertir">
    </form>
    <div id="contenedor">

    </div>
</body>
</html>