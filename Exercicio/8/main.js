// Exercício 08:
// - Crie um campo texto no html que aproveite o array de deuses, adicionando o nome digitado sempre que você clicar no botão 'Adicionar'
// - Apresente, em uma lista (ul e li), os nomes dos deuses cadastrados no array.
// - Na frente de cada nome, coloque um link com o nome '[Excluir]'
// - E claro, quando clicado, deverá excluir aquele elemento.
// OBS: Você precisará conhecer cada elemento que desejar apagar. Então você pode construir o link incluindo a posição do elemento como parâmetro da função no evento onclick.
// Tenha o cuidado de sempre atualizar a listagem.


var deuses = ['Odin', 'Thor', 'Loki']

function add() {
    deus = document.getElementById('nome').value
    deuses.push(deus)
    showList()
}

function showList() {
    document.getElementById('listaDeuses').innerHTML = ""
    for (i in deuses) {
        document.getElementById('listaDeuses').innerHTML += "<li>" + deuses[i] + "   <button onclick='del(" + i + ")'>Excluir</button> </li>"
    }
}

function del(position) {
    delete deuses[position];
    showList()
}

