var items = document.getElementsByClassName('inputs')

for (var i = 0; i < items.length; i++){
    items[i].style.color = 'red'
    items[i].style.backgroundColor = 'yellow'
    if (i%2 == 0){
        console.log(items[i].textContent = 'Hola')
    }
}

var btnInput = document.getElementById('boton')
//console.log(btnInput.value) el valor del input

function hacerClick(){
    var divOut = document.getElementById('inputValue')
    console.log('Probando una función externa dentro de un botón')
    console.log(divOut.value)
    divOut.textContent = divOut.value * 2
    if (divOut.value > 200){
        alert('Saldo insuficiente')
    }
    // * Agregando modo oscuro
    divOut.classList.add = 'Modo oscuro'
}

function onFocus(){
    console.log('Probando OnFocus')
}
