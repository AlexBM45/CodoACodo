console.log('Hola Mundo!')

// alert('Hola desde alert')

document.write('Hola desde JavaScript')

/* TIPOS DE DATOS
    String
    Enteros
    Flotantes
    Booleanos
*/

// * Entero
console.log(10)

// * Flotante
console.log(10.1)

// * True -> 1
// * Flase -> 0

console.log(true)


// * Operaciones aritméticas
console.log(10 + 10)
console.log(20 - 15)
console.log(25/5)
console.log(3*4)
console.log(15%2)


// * Concatenación
console.log('Hola, esto es ' + 'una concatenación')
console.log('Esto es una suma ' + 10 + 10) // concatenó 1010
// separar términos
console.log('Esto es una suma: ' + (10 + 10))


// * VARIABLES
var estudiantes;

// asignarle un valor
estudiantes = 86
console.log(estudiantes)

let nombre = 'Agustin';
console.log(nombre)

let robot = true;
console.log(robot)

// concatenar
console.log(estudiantes + ' ' + nombre)

// ! JacaScript distingue mayúsculas de minúsculas


// *Constantes
// Las constantes van con mayúsculas
const PI = 3.14 

console.log(4%2)
console.log(10/3)


// *Incremento
let numero = 0
console.log(numero)
numero++
console.log(numero)
numero+=2
console.log(numero)
numero--
console.log(numero)


// *Operadores relacionales
// devuelven un booleano
console.log(10 > 5)
console.log(10 < 8)
console.log(10 == 10)
console.log(10 == '10')
console.log(10 === '10')
console.log('casa' != 'casa')
console.log('casa' != 'Casa')
console.log(true == 1)


// *Condicionales
if (10 > 5){
    console.log('10 es mayor a 5')
}

if (true) {
    console.log('true')
}

if (10 > 30){
    console.log('Cumple')
} else {
    console.log('No cumplió')
}

let edadUsuario = parseInt(prompt('Ingresar edad: '))
const MAYOR = 18

if (edadUsuario > MAYOR){
    alert('Eres mayor de edad')
} else{
    alert('Eres menor de edad')
}