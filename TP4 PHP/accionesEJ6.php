<html>
    <body>
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