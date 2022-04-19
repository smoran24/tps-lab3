<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y retorno de valores (en misma página)</title>
</head>
<body>
    <form action="" method="post"> <!--al no especificar action, los resultados van a esta misma pagina-->
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellido: <input type="text" name="apellido" required><br><br>
        DNI: <input type="number" name="dni" min="1" max="99999999" required><br><br>
        E-mail: <input type="text" name="email" required><br><br>
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
        Edad: <input type="number" name="edad" min="1" max="100" required><br><br>
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
    <?php //aqui se definen las acciones a tomar al enviar el form html (muestra mensaje)
        if(isset($_POST['btnEnviar'])){ //revisa si los datos fueron enviados
        $nom = $_POST['nombre']; //asigna variables
        $ape = $_POST['apellido'];
        $dni = $_POST['dni'];
        $ema = $_POST['email'];
        $sex = $_POST['sexo'];
        $cal = $_POST['calle'];
        $nca = $_POST['numcalle'];
        $tor = $_POST['torre'];
        $pis = $_POST['piso'];
        $dto = $_POST['depto'];
        $pai = $_POST['pais'];
        $pro = $_POST['provincia'];
        $loc = $_POST['localidad'];
        $eda = $_POST['edad'];
        $eci = filter_input(INPUT_POST, 'estcivil', FILTER_SANITIZE_STRING); //con esto capto el valor elegido del dropdown <select>
        $hij = $_POST['hijos'];
        echo "Su nombre: ".$nom . "<br>"; //con "<br>" concatenado, indico que hay un salto de línea.
        echo "Su apellido: ".$ape. "<br>";
        echo "Su DNI: ".$dni. "<br>";
        echo "Su correo: ".$ema. "<br>";
        echo "Su sexo: ".$sex. "<br>";
        echo "Su calle: ".$cal. "<br>";
        echo "Su número de calle: ".$nca. "<br>";
        echo "Su torre: ".$tor. "<br>";
        echo "Su piso: ".$pis. "<br>";
        echo "Su departamento: ".$dto. "<br>";
        echo "Su país: ".$pai. "<br>";
        echo "Su provincia: ".$pro. "<br>";
        echo "Su localidad: ".$loc. "<br>";
        echo "Su edad: ".$eda. "<br>";
        echo "Su estado civil: ".$eci. "<br>";
        echo "Su cantidad de hijos: ".$hij. "<br>";
        echo "Sus hobbies: ";
        if(!empty($_POST['hobbies'])) { //si no esta vacía la checklist de hobbies...
            foreach($_POST['hobbies'] as $hob) { //recorre con un bucle foreach la checklist de hobbies asignando $hob a cada hobbie seleccionado
                echo $hob. "<br>";
            }
        }
    }
    ?>
</body>
</html>