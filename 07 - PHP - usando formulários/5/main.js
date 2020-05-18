function validaFormulario() {
    var login = document.getElementById("login").value;
    var senha = document.getElementById("senha").value;
    var enviar = document.getElementById("entrar");

    if(login == null || login ==='' || senha == null || senha === ''){
       enviar.disabled = true;
    } else {
        enviar.disabled = false;
    }
}

function logar() {
    var login = document.getElementById("login").value;
    var senha = document.getElementById("senha").value;

    if(login === 'puc' && senha === 'tecweb'){
        alert('Login efetuado com sucesso');
        document.getElementById("login").remove();
        document.getElementById("loginLable").remove();
        document.getElementById("senha").remove();
        document.getElementById("senhaLable").remove();
        document.getElementById("entrar").remove();
    } else {
        document.getElementById("login").style.borderStyle  = "solid";
        document.getElementById("login").style.borderWidth  = "1px";
        document.getElementById("login").style.borderColor  = "red";
        document.getElementById("senha").style.borderStyle  = "solid";
        document.getElementById("senha").style.borderWidth  = "1px";
        document.getElementById("senha").style.borderColor  = "red";
    }
}
