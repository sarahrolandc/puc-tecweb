Exercício 01:
Crie um formulário HTML com:
- Campo do tipo 'text' para preencher um nome completo.
- Botão com o texto: 'Exibir Nome' e ao clicar neste botão é executada uma função.
- Botão com o texto: 'Contar letras' e ao clicar neste botão é executada outra função.
Crie um arquivo js externo, e inclua no HTML criado. O js deverá ter:
- Uma função para exibir um alert com o valor do campo nome completo (botão 'Exibir Nome')
- Uma função para exibir a quantidade de letras que o texto inserido possui (botão 'Contar letras')

Exercício 02:
- No seu HTML exiba a imagem de uma lampada apagada (Ex: https://i.stack.imgur.com/b983w.jpg)
- Crie um JavaScript e altere o evento da tag img para que, quando clique na imagem, o src seja alterado para uma imagem de lâmpada acesa (Ex: https://i.stack.imgur.com/ybxlO.jpg)
- Faça também o caminho inverso (clique para trocar para a lâmpada apagada).
- Depois que conseguir fazer usando o evento 'onclick', faça o mesmo, porém usando o evento 'onmouseover', e veja se funciona.

Exercício 03:
- Acrescente no formulário HTML um campo chamado CPF <input type="text" maxlength="14" id="cpf" />. Coloque um modelo de pontuação em frente (999.888.777-11)
- Crie uma função que exiba em uma <div> o CPF digitado sem pontuação. Crie essa div antes! E use um botão para acionar a função.

- Faça o inverso, colocando um campo chamado CPF <input type="text" maxlength="11" id="cpf" /> para CPF sem pontuação.
- Adicione em outra div, o CPF com pontuação. Mas dessa vez, o texto deverá ser atualizado enquanto o usuário digita (evento onkeypress).

Exercício 04:
- Crie três botões no HTML chamados: 'Verde', 'Amarelo' e 'Vermelho'.
- Logo abaixo, digite um texto qualquer em um parágrafo <p>.
- Ao clicar em cada um dos botões, o style="color: ...;" deve ser alterado dinamicamente para a cor escrita no botão
- Exemplo de código para usar: document.getElementById("idDoParágrafo").style ="color: blue;".

Exercício 05:
- Crie uma div vazia cujo o id dela é 'resultado'
- Insira via JavaScript assim que a tela carregar o seguinte texto: 'Esse texto foi inserido pelo JavaScript...'
- Veja um exemplo de "window.onload" em https://developer.mozilla.org/pt-BR/docs/Web/API/GlobalEventHandlers/onload#Exemplos
- Agora em um arquivo js, faça funções que implementem o seguinte (use links <a> para acionar a modificação):
-- Dentro da div com o id 'resultado', escreva 1x ('Repetição'). Use o elemento 'innerHTML'.
-- Dentro da div com o id 'resultado', escreva 2x ('Repetição').
-- Dentro da div com o id 'resultado', escreva 20x ('Repetição'). (use o 'for')
-- Dentro da div com o id 'resultado', escreva 5x ('Repetição'). (agora com forEach)
-- Dentro da div com o id 'resultado', escreva 5x ('Repetição'). (agora com while)
-- Dentro da div com o id 'resultado', escreva os números de 0 ~ 10 (escolha uma das opções acima)
-- Dentro da div com o id 'resultado', escreva os números pares até 20... (ex 2,4,6...20)

Exercício 06:
Em outro arquivo js, crie as seguintes funções:
- Recebe 2 parâmetros e retorna a soma deles.
- Recebe 2 parâmetros e retorna a soma deles, porem caso seja passado um parâmetro vazio ela retorne zero.
- Retorna o quociente inteiro, e o resto de uma divisão concatenados, entre dois números passados como parâmetro.
- Retorna a palavra (impar/par) de acordo com seu parâmetro inteiro.
- Calcula 5% de desconto sobre o parâmetro, retornando o valor do desconto.
- Recebe o ano, mês e dia de nascimento de uma pessoa, informando se ela é maior de idade ou menor (18 anos).

Exercício 07: (estude mais um pouco sobre Arrays em https://www.w3schools.com/js/js_arrays.asp)
- Crie o seguinte array: var deuses = ['Odin', 'Thor', 'Loki']
- Exiba o tamanho do array
- Exiba item a item do array usando alert() (Use laços de repetição)
- Adicione os novos elementos 'Hades', 'Zeus' e 'Poseidon' com a função push()

Exercício 08:
- Crie um campo texto no html que aproveite o array de deuses, adicionando o nome digitado sempre que você clicar no botão 'Adicionar'
- Apresente, em uma lista (ul e li), os nomes dos deuses cadastrados no array.
- Na frente de cada nome, coloque um link com o nome '[Excluir]'
- E claro, quando clicado, deverá excluir aquele elemento.
OBS: Você precisará conhecer cada elemento que desejar apagar. Então você pode construir o link incluindo a posição do elemento como parâmetro da função no evento onclick.
Tenha o cuidado de sempre atualizar a listagem.