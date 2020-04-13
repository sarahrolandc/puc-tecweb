function soma(num1, num2) {
    return num1 + num2;
}

function soma2(num1, num2) {
    if (num1 == undefined || num2 == undefined) {
        return 0;
    }
    return num1 + num2;
}

function divisao(num1, num2) {
    quociente = parseInt((num1 / num2), 10);
    resto = num1 % num2;
    return quociente + "" + resto;
}

function parOuImpar(num) {
    if (num % 2 == 0) {
        return "Par";
    }
    return "Impar";
}

function desconto(pagamento) {
    return pagamento * 0, 05;
}

function maiorDeIdade(ano, mes, dia) {
    var today = new Date();
    var diaAtual = String(today.getDate()).padStart(2, '0');
    var mesAtual = String(today.getMonth() + 1).padStart(2, '0');
    var anoAtual = today.getFullYear();

    if (anoAtual - ano > 18) {
        return true;
    }
    if (anoAtual - ano === 18) {
        if (mesAtual > mes) {
            return true;
        }
        if (mesAtual == mes) {
            if (diaAtual > dia) {
                return true;
            }
        }
    }
    return false;
}

