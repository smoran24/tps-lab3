<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y metodo POST</title>
</head>
<body>
    <h1>Calcular las tablas de 3 números ingresados</h1>
    <form action="accionesEJ4.php" method="post">
        <label for="labelN1">Primer número:</label><br>
        <input type="number" name="num1" value=""><br>
        <label for="labelN2">Segundo número:</label><br>
        <input type="number" name="num2" value=""><br>
        <label for="labelN3">Tercer número:</label><br>
        <input type="number" name="num3" value=""><br><br>
        <input type="submit" value="Calcular tablas">
    </form> 
    <br>
</body>
</html>