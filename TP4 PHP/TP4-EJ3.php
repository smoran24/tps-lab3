<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y hora</title>
    <style>
        table, td, tr {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
                date_default_timezone_set('America/Argentina/Mendoza'); /*Establece el huso horario de mendoza para toda date*/
                $fechaHoy=date('D j F, Y', time());
                echo "<td>";
                echo $fechaHoy;
                echo "</td>";
            ?>
        </tr>
        <tr>
            <?php
                $fechaHoy=date('d/m/Y', time()); 
                echo "<td>";
                echo $fechaHoy;
                echo "</td>";
            ?>
        </tr>
        <tr>
            <?php
                $fechaHoy=date('D j, g:i a', time()); 
                echo "<td>";
                echo $fechaHoy;
                echo "</td>";
            ?>
        </tr>
        <tr>
            <?php
                $fechaHoy=date('W', time());
                echo "<td>";
                echo $fechaHoy;
                echo "ª semana del año.";
                echo "</td>";
            ?>
        </tr>
    </table>
</body>
</html>