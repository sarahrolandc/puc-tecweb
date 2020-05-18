Lista de exercícios em PHP - usando formulários

1 – Faça um formulário HTML que contenha dois campos que só podem receber números (valide com javascript). Escreva um código em PHP para somar esses dois números e multiplicar o resultado pelo primeiro número. Apresente também o quadrado de cada um, some os quadrados e mostre o resultado.

2 – Faça um formulário HTML que contenha três campos que só podem receber números (valide com javascript). Escreva um código em PHP que calcule a média desses números exiba o resultado.

2.1 - Faça o mesmo exercício, porém agora com 10 números. Dessa vez, você pode usar somente um campo de entrada no HTML, que deverá receber os números separados por vírgula. Separe os números em um array usando PHP (use as funções split() ou explode() ), e calcule a média usando um loop.

3 - Usando o array de meses da lista de exercícios de PHP - comandos básicos, faça um código em PHP que receba um parâmetro da url (via GET). Esse parâmetro deverá ser o número de um mês desejado. Seu código PHP deverá exibir somente o mês escolhido, formatado, em HTML com CSS. Exemplo de URL: (.../meses.php?mes=1). Esse valor você obtém usando $_GET['mes'].

4 - Ainda usando o método GET, agora faça um formulário que receba o nome de um estudante, e 5 notas de 0 a 10. As notas deverão ser apresentadas usando radiobutton. Faça um código PHP que calcule a média quando o botão submit for pressionado. Mostre também qual foi a maior nota deste aluno. Faça a validação dos campos usando javascript, e formate o formulário da maneira que achar mais adequada e apresentável.

5 - Agora usando POST, crie um formulário que receba um login e senha de um usuário. Faça a validação com javascript, para que o usuário preencha todos os campos. No PHP, verifique se o login é "puc" e a senha "tecweb". Caso seja, exiba uma mensagem, usando alert de javascript, de "Login efetuado com sucesso". Lembre-se javascript também é parte do documento HTML, então você pode produzi-lo no seu PHP. O form de login não deverá ser mais exibido em caso de sucesso. Em caso de falha, os campos deverão ser destacados em vermelho claro.