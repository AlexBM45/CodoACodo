var opcionesPago = prompt('Ingrese tipo de pago: 1.Efectivo 2.Tarjeta 3.MercadoPago 4.Bitcoin');

switch(opcionesPago){
    case '1':
        console.log('Usted pagón en: ' + opcionesPago)
        break
    case '2':
        console.log('Usted pagón en: ' + opcionesPago)
        break
    case '3':
        console.log('Usted pagón en: ' + opcionesPago)
        break
    case '4':
        console.log('Usted pagón en: ' + opcionesPago)
        break
    default:
        console.log('Opción inválida')
}


// Tablas de verdad
var nombre = 'Juan';
var edadJuan = 15;
var ciudad = 'Mendoza';
var juanRobot = false;
var autori = false;
var tutor = true;

console.log((5 >4) && (10 > 5))


// AND
// True & True = True
// False & True = False
// False & False = False


if(edadJuan > 19 && ciudad == 'Mendoza' && juanRobot == false){
    console.log('Puede pasar');
} else {
    console.log('Dió falso');
}


// OR
// True || True = True
// False || True = True
// False || False = False


if(edadJuan > 19 || autori == true || tutor == true){
    console.log('Puede pasar')
}else {
    console.log('No puede pasar')
}


// Incremetos
var mermelada = 200
var leche = 100
var sandia = 100

var cantidadCarrito = 0

var acumuiladores = acumuiladores + cantidadCarrito


// Array, vectores
// Pueden guardar cualquier tipo de datos combinados

var nombres = ['Maria', 'uma', 'Leandro', 'Marcos']

var productos = ['leche','manteca','arroz','aceitunas','café']

var edades = [18,26,120,21,40,34,62]

// Cada elemento se llama con el índice se su posición, partiendo del cero
console.log(nombres[0])

console.log(productos[3])

// LENGTH indica la cantidad de elementos que tiene el Array
console.log(productos.length) // 6


// WHILE
// Sin un límite, el ciclo será infinito. Se corta cuando la condición resulta ser false
// Las instrucciones se ejecutan por lo menos una vez
var contador = 0;
while(contador < productos.length) {
    console.log('Bye')
    console.log(productos[contador])
    contador ++
}