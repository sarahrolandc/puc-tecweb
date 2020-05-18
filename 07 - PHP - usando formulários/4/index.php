<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <?php
        $disciplinas = array("CalculoI", "AED", "TECWEB", "Grafos", "Redes");
        $html = '<form method="get" action="media.php">';
        $html .= '<div style="margin: 15px; padding: 10px; background: yellow; width: 500px;">
<input type="text" placeholder="Nome" name="nome"><br>';
        for ($i = 0; $i < count($disciplinas); $i++) {
            $html .= '<lable>' . $disciplinas[$i] . '</lable>';
            for ($j = 1; $j <= 10; $j++) {
                $html .= '<input type="radio" name=' . $disciplinas[$i] . ' value=' . $j . '>' . $j;
            }
            $html .= '<br>';
        }
        $html .= '<br><input style="background-color: red; cursor: pointer;" type="submit" value="Calcular">';
        $html .= '</div>';
        $html .= '</form>';
        echo $html;
        ?>

    </div>
</body>

</html>