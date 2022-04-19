<html>
    <head>
        <style>
            table, td, tr {
            border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table width="200px"> <!--tabla NUM1-->
            <tr>
                <th>Tabla del <?php echo $_POST["num1"]; ?></th> <!--con el metodo echo POST muestro en pantalla la variable obtenida en la pag del formulario-->
            </tr>
            <?php
            $prod1 = 0;
            $contador1 = 1;
            while($contador1 <= 10) {
                $prod1 = $prod1+$_POST["num1"];
                echo"<tr><td>";
                echo $_POST["num1"]; /*lo hago en partes asi el metodo POST no queda entre comillas*/
                echo "x$contador1</td><td>$prod1</td></tr>";
                $contador1++;
            }
            ?>
        </table>
        <br>
        <table width="200px"> <!--tabla NUM2-->
            <tr>
                <th>Tabla del <?php echo $_POST["num2"]; ?></th>
            </tr>
            <?php
            $contador2 = 1;
            for ($prod2 = $_POST["num2"]; $contador2 <= 10; $prod2 = $contador2*$_POST["num2"]) {
                echo "<tr><td>";
                echo $_POST["num2"];
                echo "x$contador2</td><td>$prod2</td></tr>";
                $contador2++;
            }
            ?>
        </table>
        <br>
        <table width="200px"> <!--tabla NUM3-->
            <tr>
                <th>Tabla del <?php echo $_POST["num3"]; ?></th>
            </tr>
            <?php
            $prod3 = $_POST["num3"];
            $contador3 = 1;
            do{
                echo "<tr><td>";
                echo $_POST["num3"];
                echo "x$contador3</td><td>$prod3</td></tr>";
                $prod3 = $prod3+$_POST["num3"];
                $contador3++;
            }while($contador3 <= 10);
            ?>
        </table>
    </body>
</html>