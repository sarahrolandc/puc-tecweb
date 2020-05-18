function removeMask() {
    var cpf = document.form1.cpf1.value;
    cpf = cpf.split(".").join("").split("-").join("");
    document.getElementById('cpfSemPontuacao').innerHTML += cpf;
}

function maskCPF(){
    var cpf = document.form1.cpf2.value;
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    document.getElementById('cpfComPontuacao').innerHTML = cpf;
}