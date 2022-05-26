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
        
        let titulo = document.createElement("h1"); //CREA UN ELEMENTO HTML Y LO ASIGNO A UNA VARIABLE "TITULO"
        titulo.innerHTML = "Reporte de gastos familiares"; //MODIFICO EL VALOR DE LA VARIABLE
        document.body.appendChild(titulo); //"PEGO" EL ELEMENTO EN EL BODY DEL DOCUMENTO HTML

        let mayorGasto = 0;
        let mayorGastador = "";
        let menorGasto = 9999999;
        let menorGastador = "";
        let promedio = 0;
        let sumatoria = 0;
        let tamanioArreglo = arrayGastos.length;
        for(let i=0; i<tamanioArreglo; i++){ //recorro el array y determino el mayor gasto
            if(arrayGastos[i].gastos>mayorGasto){ //busco el mayor gasto
                mayorGasto = arrayGastos[i].gastos;
                mayorGastador = arrayGastos[i].nombre;
            }
            if(arrayGastos[i].gastos<menorGasto){ //busco el menor gasto
                menorGasto = arrayGastos[i].gastos;
                menorGastador = arrayGastos[i].nombre;
            }
            sumatoria = sumatoria + parseInt(arrayGastos[i].gastos, 10); //sumo los gastos para tener el total (usé parseInt para convertir a entero decimal al valor gasto en i)
        }
        promedio = sumatoria / tamanioArreglo; //obtengo el promedio

        let objetoResultados = { //creo el object que almacenara los resultados para luego usarlos
            mayor: [mayorGastador, mayorGasto],
            menor: [menorGastador, menorGasto],
            prom: promedio,
            suma: sumatoria
        };
        
        let x = document.createElement("UL"); //creo la unsorted list (ul)
        x.setAttribute("id", "myUL"); //setea el atributo id del elemento ul como "myUl"
        document.body.appendChild(x); //lo pega en el html
        for(atributo in objetoResultados){ //recorre el objetoResultados y pega como items su contenido
            let y = document.createElement("LI");
            let t = document.createTextNode(atributo + ": " + objetoResultados[atributo]);
            y.appendChild(t); 
            document.getElementById("myUL").appendChild(y);
        }

        let boton = document.createElement("button"); //boton para consultar estado del presupuesto
        boton.innerHTML = "¿Nos pasamos del presupuesto?";
        document.body.appendChild(boton);
        boton.onclick = function(){ //acciones de la funcion a ejecutar si se clickea el boton
            let mensajePresupuesto = document.createElement("h2");
            if (objetoResultados.suma > 1200){ //si se pasa de presupuesto (1200)...
                mensajePresupuesto.style.color = "red";
                mensajePresupuesto.style.backgroundColor = "yellow";
                mensajePresupuesto.innerHTML = "SÍ QUE SÍ, FUE SUPERADO!!!!111";
            }else{
                mensajePresupuesto.innerHTML = "El presupuesto no fue superado";
            }
            document.body.appendChild(mensajePresupuesto);
        }

        boton.onmouseover = function(){ //muestra un mensaje al pasar sobre el boton
            let textoAyuda = document.createElement("p");
            textoAyuda.innerHTML = "(El presupuesto es de $1200)";
            document.body.appendChild(textoAyuda);
        }

        let boton2 = document.createElement("button"); //boton para cambiar a tema oscuro
        boton2.innerHTML = "Cambiar a tema oscuro";
        document.body.appendChild(boton2);
        boton2.onclick = function(){ //acciones de la funcion a ejecutar si se clickea el boton
            document.body.setAttribute("class", "dark-theme"); //setea el atributo class a "dark-theme", el cual ya esta definido en el css
        }
    }else{
        alert("Gracias por haber venido")
        window.location.replace("https://www.netflix.com/ar/"); //redirige a la pag de netflix
    }
}
window.onload = alCargar(); //ejecuta la funcion alCargar cuando carga la ventana

