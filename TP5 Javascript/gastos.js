let familiar = { //declaracion del objeto familiar
    nombre: "",
    gastos: 0,
}

function obtenerDatos(){ //funcion para captar datos
    let cantFamiliares = prompt("Ingrese la cantidad de personas en su familia:");
    while(isNaN(cantFamiliares) || cantFamiliares<3){ //repite la pregunta mientras no sea un número lo ingresado (isNaN)
        cantFamiliares = prompt("Error: Debe ser un valor numérico mayor a 2. Intente de nuevo:");
    }
    let familia = []; //creo el array de familiares
    for(let i=0; i<cantFamiliares; i++){
        let nombreFamiliar = prompt("¿Cuál es el nombre del familiar?");
        while(nombreFamiliar == ""){//repite la pregunta mientras este vacía la caja de texto
            nombreFamiliar = prompt("Error: Debe completar el campo. ¿Cuál es el nombre del familiar?");
        } 
        let gastosFamiliar = prompt("¿Cuántos gastos hizo el familiar en el día?");
        while(isNaN(gastosFamiliar) || gastosFamiliar == ""){ //repite la pregunta mientras este vacía la caja de texto o no sea numero lo ingresado
            gastosFamiliar = prompt("Error: Debe ser un valor numérico válido. ¿Cuántos gastos hizo el familiar en el día?");
        } 
        let esteFamiliar = Object.create(familiar); //crea una instancia nueva del objeto familiar
        esteFamiliar.nombre = nombreFamiliar; //asigno valores obtenidos a los atributos de la instancia
        esteFamiliar.gastos = gastosFamiliar;
        familia[i] = esteFamiliar; //guardo la instancia del familiar creada en el array de familiares
    }
    return familia; //retorna el array de familiares
}

function alCargar() { //funcion que mostrara ventanas para preguntarle al usuario si quiere ingresar a la pag.
    let opcionVentana = confirm("Bienvenido. ¿Desea iniciar el reporte de gastos familiar?"); //muestra una ventana de tipo confirm al iniciar, guarda su valor (opcion elegida) en una variable
    if (opcionVentana == true){ //si el usuario hace click en aceptar
        let arrayGastos = obtenerDatos(); //ejecuta la funcion y asigna su retorno (array)
        console.log(arrayGastos); //muestra array por consola;
    }else{
        alert("Gracias por haber venido")
        window.location.replace("https://www.netflix.com/ar/");
    }
}
window.onload = alCargar(); //ejecuta la funcion alCargar cuando carga la ventana

