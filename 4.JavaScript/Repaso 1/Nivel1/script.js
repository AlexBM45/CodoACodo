// Ejercicio 1
console.log('Alejandra Benítez');
console.log(2164);
console.log('Leer, ver series, hacer ejercicio');

// Ejercicio 2
var frase = prompt('Escribe una frase: ');
console.log(frase);

// Ejercicio 3
var nombre = prompt('Escribe tu nombre: ');
console.log(`Hola ${nombre}!`);

// Ejercicio 4
var nombre1 = prompt('Nombre: ');
var apellido = prompt('Apellido: ');
console.log(`${nombre1} ${apellido}`);

// Ejercicio 5
var anio = parseInt(prompt('¿En qué año naciste?'));
var edad = 2021 - anio;
console.log(`Tienes ${edad} años`);

// Ejercicio 6
var peso = Number(prompt('Peso en [kg]:'));
var altura = Number(prompt('Altura en [cm]: '));
var bmi = peso/altura**2;
console.log(`Tu BMI es ${bmi}`);

// Ejercicio 7
var cantidadDeVentanas = 4;
console.log(cantidadDeVentanas);

// Ejercicio 8
var soyHumano = true;
console.log(soyHumano);

// Ejercicio 9
var miGustoDePizza = 'Pizza margarita';
console.log(miGustoDePizza);

// Ejercicio 10
var arreglo = [false,'Hola',0,'Minions']
console.log(arreglo);

// Ejercicio 11
var base = Number(prompt('Base del triángulo: '));
var altura = Number(prompt('Altura del triángulo: '));
var perimetro = base*3;
var area = base*altura/2;
console.log(`Perímetro del triángulo: ${perimetro}`);
console.log(`Área del triángulo: ${area}`);

// Ejercicio 12
var pesoLibras = Number(prompt('Peso en [lb]: '));
var pesoKg = pesoLibras/2.2046;
console.log(`Peso en [kg]: ${pesoKg}`);

// Ejercicio 13
var sueldo = Number(prompt('Sueldo: '));
var sueldoFinal = sueldo*1.15;
console.log(`Sueldo final con aumento (15%): ${sueldoFinal}`);

// Ejercicio 14
var nota = Number(prompt('Calificación: '));
if (nota < 7){
    alert('Aprobado');
}else{
    alert('Reprobado');
}

// Ejercicio 15
var categoria = prompt('Categoría: ');
var sueldo1 = Number(prompt('Sueldo: '));

// Ejercicio 16
var matricula = Number(prompt('Matrícula: '));
var notas = 0
for (var i = 0; i < 5; i++){
    notas += Number(prompt(`Escribe tu nota ${i + 1}`));
}
promedio = notas/5;
console.log(`Matrícula: ${matricula}`);
console.log(`Promedio: ${promedio}`);
if(promedio > 7){
    console.log('Aprobado');
} else{
    console.log('No aprobado');
}

// Ejercicio 17
var a = 2;
var b = 2;
var c = 1;
if (a > b){
    if(a > c){
        console.log(a);
    }else{
        console.log(c);
    }
}else if(a < b){
    if(b > c){
        console.log(b);
    }else{
        console.log(c)
    }
}else if(a == b){
    if(a > c){
        console.log(a);
    }else{
        console.log(c);
    }
}