function load() {
    document.getElementById('ola').innerHTML = 'Esse texto foi inserido pelo JavaScript...';
}

function write1x() {
    document.getElementById('resultado').innerHTML = "Repetição";
}

function write2x() {
    document.getElementById('resultado').innerHTML = "Repetição";
    document.getElementById('resultado').innerHTML += "<br> Repetição";
}

function write20x() {
    document.getElementById('resultado').innerHTML = ""
    for (index = 0; index < 20; index++) {
        document.getElementById('resultado').innerHTML += "Repetição <br>";
    }
}

function write5x() {
    document.getElementById('resultado').innerHTML = ""
    range = [1, 2, 3, 4, 5]
    for (var i in range) {
        document.getElementById('resultado').innerHTML += "Repetição <br>";
    }
}

function write5xWhile() {
    document.getElementById('resultado').innerHTML = ""
    var i = 0;
    while (i < 5) {
        document.getElementById('resultado').innerHTML += "Repetição <br>";
        i++;
    }
}

function writeNumbers() {
    document.getElementById('resultado').innerHTML = ""
    for (index = 0; index <= 10; index++) {
        document.getElementById('resultado').innerHTML += "<br>" + index;
    }
}

function writePairNumbers() {
    document.getElementById('resultado').innerHTML = ""
    for (index = 1; index <= 20; index++) {
        if (index % 2 == 0) {
            document.getElementById('resultado').innerHTML += "<br>" + index;
        }
    }
}

window.onload = load;