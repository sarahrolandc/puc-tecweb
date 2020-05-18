<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
</head>

<body>
    <?php
    function geraCalendario($ano)
    {
        $html = '<div style="width: 1100px; display: flex; flex-direction: row; flex-wrap: wrap; margin: 4px; padding: 5px;">';
        $ultimoDiaSemanaMesAnterior = 3;

        $htmlMes = '';
        $mesSolicitado = $_GET["mes"];

        for ($mes = 0; $mes < count($ano); $mes++) {
            $htmlMes .= '<div style="display: flex; margin: 10px; 
                  flex-direction: column;">';
            $htmlMes .= '<span>' . $ano[$mes]['Nome'] . '</span>';
            $htmlMes .= '<table border="1">
                    <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                    </tr>';
            $diaDaSemana = 1;
            $htmlMes .= '<tr>';
            if ($ultimoDiaSemanaMesAnterior < 7) {
                for ($diaVazio = 1; $diaVazio <= $ultimoDiaSemanaMesAnterior; $diaVazio++) {
                    $htmlMes .= '<td></td>';
                    $diaDaSemana++;
                }
            }
            for ($dia = 1; $dia <= $ano[$mes]['Quantidade']; $dia++) {

                if ($diaDaSemana == 1) {
                    $htmlMes .= '<tr>';
                }

                $htmlMes .= '<td>' . $dia . '</td>';

                if ($diaDaSemana == 7) {
                    $htmlMes .= '</tr>';
                    $diaDaSemana = 0;
                }
                if ($dia == $ano[$mes]['Quantidade']) {
                    $ultimoDiaSemanaMesAnterior = $diaDaSemana;
                }
                $diaDaSemana++;
            }

            $htmlMes .=  '</table>';
            $htmlMes .= '</div>';
            if ($mesSolicitado == $mes + 1) {
                break;
            } else {
                $htmlMes = '';
            }
        }
        $html .= $htmlMes;
        $html .= '</div>';

        return $html;
    }

    $ano2020 = array(
        array("Nome" => "Janeiro", "Quantidade" => 31),
        array("Nome" => "Fevereiro", "Quantidade" => 29),
        array("Nome" => "Março",  "Quantidade" => 31),
        array("Nome" => "Abril", "Quantidade" => 30),
        array("Nome" => "Maio", "Quantidade" => 31),
        array("Nome" => "Junho", "Quantidade" => 30),
        array("Nome" => "Julho", "Quantidade" => 31),
        array("Nome" => "Agosto", "Quantidade" => 31),
        array("Nome" => "Setembro", "Quantidade" => 30),
        array("Nome" => "Outubro", "Quantidade" => 31),
        array("Nome" => "Novembro", "Quantidade" => 30),
        array("Nome" => "Dezembro", "Quantidade" => 31)
    );

    echo geraCalendario($ano2020);
    ?>
</body>

</html>