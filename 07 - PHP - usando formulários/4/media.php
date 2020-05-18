<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body style="background-color: blue">
    <?php
    $nome = $_GET["nome"];
    $disciplina1 = $_GET["CalculoI"];
    $disciplina2 = $_GET["AED"];
    $disciplina3 = $_GET["TECWEB"];
    $disciplina4 = $_GET["Grafos"];
    $disciplina5 = $_GET["Redes"];
    $media = ($disciplina1 + $disciplina2 + $disciplina3 + $disciplina4 + $disciplina5) / 5;
    $html = '<div style="margin: 15px">';
    $html .= "Média $nome: $media<br>";
    $html .= "<br>";
    if ($disciplina1 >= $disciplina2 && $disciplina1 >= $disciplina3 && $disciplina1 >= $disciplina4 && $disciplina1 >= $disciplina5) {
        $html .= "Maior nota $nome: $disciplina1";
    } else if ($disciplina2 >= $disciplina1 && $disciplina2 >= $disciplina3 && $disciplina2 >= $disciplina4 && $disciplina2 >= $disciplina5) {
        $html .= "Maior nota $nome: $disciplina2";
    } else if ($disciplina3 >= $disciplina1 && $disciplina3 >= $disciplina2 && $disciplina3 >= $disciplina4 && $disciplina3 >= $disciplina5) {
        $html .= "Maior nota $nome: $disciplina3";
    } else if ($disciplina4 >= $disciplina1 && $disciplina4 >= $disciplina2 && $disciplina4 >= $disciplina3 && $disciplina4 >= $disciplina5) {
        $html .= "Maior nota $nome: $disciplina4";
    } else {
        $html .= "Maior nota $nome: $disciplina5";
    }
    $html .= '</div>';
    echo $html;
    ?>
</body>

</html>