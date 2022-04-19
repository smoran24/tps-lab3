<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y retorno de valores (en pag. acción)</title>
</head>
<body>
    <form action="accionesEJ6.php" method="post">
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellido: <input type="text" name="apellido" required><br><br>
        DNI: <input type="number" name="dni" min="1" max="99999999" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        Sexo: <br><br>
        -Masculino: <input type="radio" name="sexo" value="masculino" required><br><br>
        -Femenino: <input type="radio" name="sexo" value="femenino"><br><br>
        Direccion: <br><br>
        -Calle: <input type="text" name="calle" required><br><br>
        -Número: <input type="number" name="numcalle" required><br><br>
        -Torre: <input type="text" name="torre"><br><br>
        -Piso: <input type="text" name="piso"><br><br>
        -Depto.: <input type="text" name="depto"><br><br>
        -País: <input type="text" name="pais" required><br><br>
        -Provincia: <input type="text" name="provincia" required><br><br>
        -Localidad: <input type="text" name="localidad" required><br><br>
        Edad: <input type="number" name="edad" min="18" max="100" required><br><br>
        Estado civil:
        <select id="estcivil" name="estcivil" autofocus required><br><br>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
        </select>
        <br><br>
        Hijos: <input type="number" name="hijos" min="0" max="20"><br><br>
        Hobbies:<br><br> <!--las llaves en el name indican que se tratara de un array de elementos-->
        <input type="checkbox" name="hobbies[]" value="programacion">Programación<br> 
        <input type="checkbox" name="hobbies[]" value="dibujo">Dibujo<br>
        <input type="checkbox" name="hobbie[]" value="futbol">Fútbol<br>
        <br><br>
        <input type="submit" name="btnEnviar">
    </form>
    
</body>
</html>