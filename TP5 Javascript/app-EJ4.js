var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e",
6, "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e",
3, "r", 2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i",
4, "a", 5, 2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3,
1, 5, 3, 2, "l", 3, "a", 4, "v", 5, "e", 6];

function obtengoAlturaCalle(arreglo){
    let arregloDeNumeros = arreglo.filter(item => typeof item === 'number'); //filtro el arreglo recibido por elementos que sean de tipo numero y los guardo en un array nuevo (generado por la func filter)
    let sumatoria = 0;
    for(let indice in arregloDeNumeros){
        sumatoria = sumatoria + arregloDeNumeros[indice]; //suma los valores numericos del array
    }
    return sumatoria;
}
function obtengoNombreCalle(arreglo){
    let arregloDeLetras = arreglo.filter(item => typeof item === 'string');
    let cadena = " ";
    for(let indice in arregloDeLetras){
        cadena = cadena + arregloDeLetras[indice]; //concatena las letras del array para formar una cadena
    }
    return cadena;
}

let alturaCalle = obtengoAlturaCalle(enigma);
let nombreCalle = obtengoNombreCalle(enigma);
console.log("La calle del enigma es:" + nombreCalle + " " + alturaCalle);
