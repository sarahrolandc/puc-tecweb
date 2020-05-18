<?php

function media($numbers)
{
    $array = explode(";", $numbers);
    $sum = 0;
    foreach ($array as $valor) {
        $sum += $valor;
    }
    return $sum / count($array);
}

$media_valores = media($_POST["num"]);
echo "A media dos valores é: " . $media_valores;
