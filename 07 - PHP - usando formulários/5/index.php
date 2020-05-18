<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
<?php
$html = '
        <div style="flex-direction: column; padding: 15px;">
            <div id="loginLable" style="margin-bottom: 7px">Login <input id="login" onkeyup="validaFormulario();" type="text" name="valor1"></div>
            <div id="senhaLable" style="margin-bottom: 7px">Senha <input id="senha" onkeyup="validaFormulario();" type="password" name="valor2"></div>
            <button onclick="logar()" id="entrar" disabled>Entrar</button>
        </div>';
echo $html;
?>
</div>
<script type="text/javascript" src="exercicio10.js"></script>
</body>
</html>
