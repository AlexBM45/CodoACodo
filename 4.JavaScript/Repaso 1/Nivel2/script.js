// Ejercicio 1
var variable_a = 33;
var variable_b = 77
var variable_resultado = variable_a + variable_b;
console.log(variable_resultado);

// Ejercicio 2
var a = Number(prompt('Primer número'));
var b = Number(prompt('Segundo número'));
var c = Number(prompt('Tercer número'));
var d = Number(prompt('Cuarto número'));
var e = Number(prompt('Quinto número'));
var promedio = (a + b + c + d + e)/5;
console.log(promedio);

// Ejercicio 3
var nota = Number(prompt('Primera nota'));
var nota2 = Number(prompt('Segunda nota'));
if(nota > nota2){
    console.log(`El mayor es: ${nota}`);
} else {
    console.log(`El mayor es: ${nota2}`);
}

// Ejercicio 4
var compra = Number(prompt('El total de la compra: '));
if (compra > 100){
    var total = compra*1.15;
    console.log(`Total a pagar: ${total}`);
} else {
    console.log(`Total a pagar: ${compra}`);
}

// Ejercicio 5
var personas = Number(prompt('¿Cuántas personas vienen '));
if(personas < 8){
    var pagoFinal = personas*1.5;
    console.log(`Total a pagar: ${pagoFinal}`);
} else {
    pagoFinal = personas*0.5;
    console.log(`Total a pagar: ${pagoFinal}`);
}

// Ejercicio 6
var nota1 = Number(prompt('Primer nota: '));
var nota2 = Number(prompt('Segunda nota: '));
if (nota1 > nota2){
    console.log('Nota1 es mayor');
} else {
    console.log('Nota2 es mayor');
}

// Ejercicio 7
var clasificacion = prompt('Escribe la clasificación: ');
switch(clasificacion){
    case '0':
        console.log('Mala');
        break
    case '1':
        console.log('Regular');
        break
    case '2':
        console.log('Buena');
        break
    case '3':
        console.log('Muy buena');
        break
    case '4':
        console.log('Excelente');
        break
    default:
        console.log('Opción inválida');
}

// Ejercicio 8
for(var i = 49; i >= 0; i--){
    console.log(i);
}

// Ejercicio 9
for(var j = 0; j <=100; i++){
    if(j%2 ==0){
        console.log(j);
    }
}

// Ejercicio 10
for (var i = 0; i <=100; i++){
    console.log(i);
}

// Ejercicio 11
arreglo = [];
while(true){
    var elemento = Number(prompt('Ingresa un número (-1 para terminar): '));
    if(elemento == -1){
        for (var j = 0; j < arreglo.length; j++){
            console.log(`${j}: ${arreglo[j]}`);
        }
        break
        
    } else {
        arreglo.push(elemento);
    }
}

// Ejercicio 12
arreglo1 = [];
while(true){
    var elemento1 = Number(prompt('Ingresa un número (-1 para terminar): '));
    if(elemento1 == -1){
        suma = 0
        for (var i = 0; i < arreglo1.length; i++){
            suma += arreglo1[i];
        }
        promedio = suma/arreglo1.length;
        console.log(promedio);
        break
        
    } else {
        arreglo1.push(elemento1);
    }
}

// Ejercicio 13
productos = [];
precios = [];
for(var j = 0; j <= 5; j++){
    productos[j] = prompt('Nombre del producto: ');
    precios[j] = prompt('Precio del producto: ');
}
for(var j = 0; j <= 5; j++){
    console.log(`Producto: ${productos[j]}  Precio: ${precios[j]}`);
}

// Ejercicio 14
alturas = [];
while(true){
    var altura = Number(prompt('Ingresa altura (0 para terminar): '));
    if(altura > 2.5 || altura < 0){
        console.log('Verifica el dato');
        console.log(alturas);
        break
    } else if (altura == 0) {
        var suma = 0
        for (var i = 0; i < alturas.length; i++){
            suma += alturas[i];
        }
        promedio = suma/alturas.length;
        console.log(promedio);
        break
    } else {
        alturas.push(altura);
    }
        
}

// Ejercicio 15
tarjetas = ['El galán o el pequeño','El patito o El sol','San Como','La cama','El gato o la espina','El perro o el corazón','El revolver','la pipa','la muleta','Incendio o la dama','El zapato o arroyo','La rosa','Las banderillas el minero o los dos soldaditos','Soldado','La mala pata','Borracho, la cerveza','La niña bonita','El anillo o la guitarra','Desgracia o barco de vela','Sangre, los ojos o el ramillete','San José o El Correo para Cuba','La fiesta o el tío del queso','La mujer, la primavera','Los dos patitos','Cocinero o el melón','Caballo o Nochebuena','Navidad','La misa, los pollos']
var numTarjeta = Number(prompt('Número de tarjeta'));
if (numTarjeta > 0 && numTarjeta <= 25 ){
    console.log(`${numTarjeta} = ${tarjetas[numTarjeta]}`);
} else {
    console.log('Opción inválida');
}

// Ejercicio 16
var nombres = ['María','Ana','Brenda','Frida','Joaquín','Max','Alejandro','Emilio','Juan','Carlos'];
var apellidos = ['Flores','Ramirez','Guzmán','Montalvo','Martínez','Benítez','Sánchez','Rodríguez','Toledo','Castañeda'];