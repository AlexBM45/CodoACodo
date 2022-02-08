var tickets = prompt('Ingrese cantidad de tickets');
console.log(tickets + tickets)

var tickets2 = Number(prompt('Ingrese la cantidad de tickets'))
console.log(tickets2 + tickets2)

var tickets3 = parseInt(prompt('Ingrese la cantidad de tickets'))
console.log(tickets3 + tickets3)

var tickets4 = parseFloat(prompt('Ingrese la cantidad de tickets'))
console.log(tickets4 + tickets4)


// Arrays
var precios = [10,20,30,40,50]
console.log(precios)
console.log(precios.length)


// FOR
for (var i = 0; i < 50; i++){
    if(i%2 == 0){
        console.log('Par: ' + i)
    }

    if(i == 50){
        console.log('Llegó al cincuenta');
        break
    }
}

// Con un array
var acumuladorPrecios = 0;
for (var i = 0; i < precios.length; i++){
    console.log(precios[i]);
    acumuladorPrecios = acumuladorPrecios + precios[i]
}
console.log(acumuladorPrecios)


var mostrarNombre = parseInt(prompt('Ingrese la cantidad por repetir: '))

for (var i = 1; i <= mostrarNombre; i++){
    console.log('Mario')
}


var notas = parseInt(prompt('¿Cuántas notas serán?'))

for (var i = 0; i < notas; i ++){
    var nota = Number(prompt('Ingrese su nota: '))
    if (nota > 6){
        console.log('Recuperatorio')
    }
}


var nombreProducto = 'Leche';
var precioProducto = 140;
var stock = true;

var nombreProductos = ['leche','azúcar','café'];
var precioProductos = [140,150,170];
var stockProductos = [true,false,true];


// Objeto
var nomProducto = {
    nombre: 'leche',
    precio: 140,
    stock: true
}

console.log(nomProducto);

// elementos dentro del objeto
console.log(nomProducto.nombre);
console.log(nomProducto.precio);
console.log(nomProducto.stock)


// FUNCIONES
// Reutiliza código
// Crear una función con la palabra reservada FUNCTION
function nombreFuncion(){
    console.log('Hola, esto es una función');
}
// invocar a la función
nombreFuncion()
// se puede invocar la función las veces necesarias

for (var i = 0 ; i < 5; i ++){
    nombreFuncion();
}

// las funciones pueden recibir parámetros
function sumar(num1,num2){ // a es un parámetro
    console.log(num1 + num2);
}

sumar(6,72) //  el valor que recibe es un argumento

var numA = 10;
sumar(numA,30)

// los objetos pueden tener funciones dentro, que se llamaran MÉTODO
var producto = {
    nombre: 'agua',
    precio: 100,
    stock: true,
    hablar: function(casa){
        console.log('Puedo hablar')
    }
}

console.log(producto.hablar(1))