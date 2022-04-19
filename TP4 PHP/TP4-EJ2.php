<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles y asignacion de variables</title>
    <style>
        table, td, tr {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <table width="200px"> <!--tabla del 2-->
        <tr>
            <th>Tabla del 2</th>
        </tr>
        <?php
        $prod2 = 0;
        $contador2 = 1;
        while($prod2 < 20) {
            $prod2 = $prod2+2;
            echo "<tr><td>2x$contador2</td><td>$prod2</td></tr>"; /*Imprime filas de la tabla html con cada producto + cada resultado por fila*/
            $contador2++;
        }
        ?>
    </table>
    <br>
    <table width="200px"> <!--tabla del 3-->
        <tr>
            <th>Tabla del 3</th>
        </tr>
        <?php
        $contador3 = 1;
        for ($prod3 = 3; $prod3 <= 30; $prod3=$contador3*3) {
            echo "<tr><td>3x$contador3</td><td>$prod3</td></tr>"; /*Imprime filas de la tabla html con cada producto + cada resultado por fila*/
            $contador3++;
        }
        ?>
    </table>
    <br>
    <table width="200px"> <!--tabla del 5-->
        <tr>
            <th>Tabla del 5</th>
        </tr>
        <?php
        $prod5 = 5;
        $contador5 = 1;
        do{
            echo "<tr><td>5x$contador5</td><td>$prod5</td></tr>"; /*Imprime filas de la tabla html con cada producto + cada resultado por fila*/
            $prod5 = $prod5+5;
            $contador5++;
        }while($prod5 <= 50);
        ?>
    </table>
</body>
</html>