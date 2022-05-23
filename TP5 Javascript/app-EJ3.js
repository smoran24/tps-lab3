let listaParrafos = document.querySelectorAll("p"); //guarda en una variable el retorno (de tipo NodeList) de la query que selecciona todos los parrafos

function recorroLista(estaLista){
    let contParrafosSinCambio = 0; //inicializo el contador de parrafos que no fueron modificados
    for (let i = 0; i < estaLista.length; i++){ //los NodeList solo se pueden recorrer con un for simple. El foreach causa errores.
        if(i%2==0){ //si el indice del parrafo es par...
            estaLista[i].style.color = "red"; //cambio color texto a rojo
            estaLista[i].style.fontWeight = "bold"; //cambio el peso del texto a negrita
            estaLista[i].style.textAlign = "center"; //centro el texto
        }else{
            contParrafosSinCambio++ //suma 1 al contador de parrafos sin cambiar
        }
    }
    return contParrafosSinCambio; //retorna la cantidad de parrafos sin cambio
}

console.log("Párrafos que no se vieron afectados: " + recorroLista(listaParrafos)); //llamo a la funcion con la lista de parrafos que los capturó arriba




