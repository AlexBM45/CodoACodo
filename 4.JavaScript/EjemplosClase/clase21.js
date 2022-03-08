// Variables globales
var num1 = 100
var num2 = 200

// * Una función que no devuelve algo, es UN PROCEDIMIENTO
// * Cuando si retorna, es una FUNCIÓN

// Función
function sumNum(num1,num2 = 1){ // Valor por defecto
    // variable local
    //! no se puede usar fuera de la función
    var total = num1 + num2
    //console.log(total)

    return total // el retorno es un valor, se puede guardar en una variable o mostrar en pantalla
}

console.log(sumNum(num1,num2))

function soyRobot(nombre,edad,humano){
    return humano
}

var alumno = ['Alejandro',25,true]
soyRobot(alumno[0],alumno[1],alumno[2])

var estudiantes = {
    nombre: 'Fernando',
    edad: 36,
    robot: true
}

soyRobot(estudiantes.nombre,estudiantes.edad,estudiantes.robot)



// * DOM
var titleHeader = document.getElementById('header-title')
titleHeader.textContent = 'Tema: JavaScript'

var com2164 = Number(prompt('Número de comisión: '))

var encabezado = document.getElementById('main-header')
    encabezado.textContent = 'Comisión 2164' // reemplaza el contenido del id con el texto asignado
    var outputDiv = document.getElementById('output')

if(com2164 == 2164){
    console.log(encabezado)
    encabezado.textContent = 'Comisión 2164'

    outputDiv.textContent = 'Eres paquete Premium'
} else {
    outputDiv.textContent = 'Usuario Básico'
}

var items = document.getElementsByClassName('list-group-item')

console.log(items[0])

for( var i = 0; i < items.length; i++){
    console.log(items[i])
}