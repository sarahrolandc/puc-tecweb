function showName() {
    name = document.getElementById("nome").value;
    alert(name);
}

function countCharacters() {
    name = document.getElementById("nome").value;
    length = name.replace(" ", "").length;
    document.write("O texto insetido possui " + length + " letras");
}