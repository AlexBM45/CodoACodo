// Función sin parámetros
function tomarMerienda(){
    // Cuerpo de la función
    console.log('Función sin parámetros');
}



// Función con parámetro
function tomarMerienda1(a){
    console.log(a);
}

// Función con parámetros
function tomarMerienda2(a,b = 50){ // un parámetro tiene un valor por defecto
    console.log(a + b);
}
// Los parámetros se crean con la declaración de la función

tomarMerienda1('Función con parámetro');
tomarMerienda2(10,10);
tomarMerienda2(20);


function tomarMerienda3(a,b){
    console.log(a - b);
}

var n1 = 10;
var n2 = 15;
tomarMerienda3(n1,n2);
tomarMerienda3(n2,n1);

function sumarTotal(num1,num2,num3){
    console.log(num1 + num2);
    console.log(num1 + num2 + num3);
}
// No es necesario utilizar todos los parámetros que se llaman

var valorA = 10;
var valorB = 20;
var valorC = 30;

sumarTotal(valorA,valorB,valorC);

// FUNCIONES ANÓNIMAS
// No tienen un nombre después de function, pero se guardan en una variable
var suma10 = function(){
    console.log('Soy una función anónima');
}


function funcionRetorno(num1,num2){
    var totalSuma = num1 + num2;
    if(totalSuma > 25) {
        return 'Es mayor a 25';
    } else {
        return 'Es menor a 25';
    }
    return totalSuma;  // devuelve algo al código principal
}

console.log(funcionRetorno(25,15));
var totalSuma = funcionRetorno(25,15);
// El valor que retorna la función se puede desplegar en consola o se puede almancenar en una variable


function verificarMayor(num1,num2){
    if(num1 > num2){
        return `Es mayor: ${num1}`;
    } else {
        return `Es mayor: ${num2}`;
    }
}

console.log(verificarMayor(23,45));


// DOM
// Document Object Model

document.write('Clase 20: Funciones');

console.log(document.doctype);
console.log(document.head);
console.log(document.body);
console.log(document.all[2]);


// La mejor manera de llamar a un elemento en particular de la página es con el ID o con las CLASES
console.log(document.getElementById('modificar')); // Muestra que hay en ese ID
document.getElementById('modificar').textContent = 'Modificando el DOM';

var divModificar = document.getElementById('modificar2');
divModificar.textContent = 'Modificar el DOM desde una variable';

document.getElementById('modificar3').innerText = 'Hola, probando INNER';
// Inner sólo llama al texto; textContent engloba todo el contenido

document.getElementById('modificar4').innerHTML = '<h3>Hola probando innerHTML</h3>';
// Permite también modifcar las etiquetas que se están utilizando originalmente en el contenido del ID