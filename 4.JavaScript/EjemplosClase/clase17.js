/*
COMPARACIONES LÓGICAS
<
>
<=
>=
==
!=
*/

console.log(4 > 5) // false

console.log('Booleanos: ' + (true > false));
console.log('casa' == 'Casa');
console.log('casa' != 'Casa');
console.log(!5 != 5); // el primer signo de admiración le indica que debe mostrar el inverso de la respuesta obtenida

// pedido usuario y password
var nomUsuario = 'Pepita';
var registroBDUsuario = 'Pepita';
console.log(nomUsuario == registroBDUsuario);
var nombreUsuario1 = prompt('Ingrese su nombre'); // Permite que el usuario ingrese información y se guarda en la variable
var password = prompt('Ingrese su contraseña');
console.log(nombreUsuario1);
// Ingresa el contenido al HTML
// document.write(nombreUsuario1);

// las constantes no se peuden cambiar de valor
// por lo general, las constantes se nombran con mayúsculas
const NOMBRE = 'uma';
const PI = 3.14159;

const DOLAR = 181;

var num1 = prompt('Primer número: ');
// cambiar tipo de dato
num1 = Number(num1);
var num2 = prompt('Segundo número: ');
num2 = Number(num2);
alert(num1 + num2); // concatena los números porque prompt toma cualquier entrada del usuario como String


// El usuario ingrese las tres notas del alumno y su nombre. Mostrar su primedio con su nombre
const ALUMNO = prompt('Nombre del alumnos');
var notaA = Number(prompt('Primera nota'));
var notaB = Number(prompt('Segunda nota'));
var notaC = Number(prompt('Tercera nota'));

var prom = (notaA + notaB + notaC)/3;
document.write('Alumno: ' + ALUMNO);
document.write(' Promedio: ' + prom);


// Pedir al usuario el monto en pesos y pasarlo a dolares (oficial, blue y turista)
// Pedir al usuario un lado del cuadrado y mostrar perímetro y superficie
const LADO = Number(prompt('Lado del cuadrado'));
var perimetro = LADO * 4;
var area = LADO * LADO;
document.write('Perímetro: ' + perimetro);
document.write('Área: ' + area);


/* CONDICIONALES
si algo es verdadero -> sucede algo
si no es verdadero -> sucede otra cosa
*/
const nombreUsuario = Number(prompt('Ingrese su nombre de usuario'));
const edadusuario = Number(prompt('Ingrese su edad'));

if (nomUsuario == 'Pepita'){
    alert('Usted puede ingresar a la plataforma');
    document.write('Su nombre: ' + nomUsuario);
} else {
    alert('No puede ingresar a la plataforma');
}

if(edadusuario == 15){
    console.log('Su edad es ' + edadusuario);
}

if (4 > 5) {
    // se ejecuta si es verdadero
    alert('Hola mundo condicional');
}else {
    // se ejecuta si el condicional es falso
    alert('Esto es falso');
}


// SWITCH
var dia = prompt('Ingrese el día de la semana en número');
switch(dia){
    case 1:
        console.log('Es día lunes');
        break
    case 2:
        console.log('Es día martes');
        break
    case 3:
        console.log('Es día miércoles');
        break
    case 4:
        console.log('Es día jueves');
        break
    case 5:
        console.log('Es día vienes');
        break
    case 6:
        console.log('Es día sábado');
        break
    case 7:
        console.log('Es día domingo');
        break
    default:
        console.log('No es ningún día de la semana')
        break
}