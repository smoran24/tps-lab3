let estudiante = {
    nombre: String,
    curso: String,
    dni: Number,
    email: String,
    fromObjectToArray: function(){
        arreglo = [];
        arreglo[0] = this.nombre;
        arreglo[1] = this.curso;
        arreglo[2] = this.dni;
        arreglo[3] = this.email;
        return arreglo;
    }
}
//datos de prueba (los cuales tambien se pueden usar en la consola del navegador!)
estudiante.nombre = "Sebastian";
estudiante.curso = "2do año";
estudiante.dni = 42793880;
estudiante.email = "smoran@gmail.com";

//guardo el array de retorno en una variable (de tipo array tambien) y recorro su contenido, mostrandolo
let arregloDeAtributos = estudiante.fromObjectToArray();
for(let atributo in arregloDeAtributos){
    console.log(arregloDeAtributos[atributo]);
}