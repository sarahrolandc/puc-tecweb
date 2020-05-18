<?php
function media($valor1, $valor2, $valor3)
{
    return ($valor1 + $valor2 + $valor3) / 3;
}
function mediaArray($vet)
{
    $sum = 0;
    foreach ($vet as $valor) {
        $sum += $valor;
    }
    return $sum / count($vet);
}

$valor1 = 1;
$valor2 = 2;
$valor3 = 3;
$valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo ("Média: " . media($valor1, $valor2, $valor3));
echo nl2br("\nMedia de valores no Vetor: " . mediaArray($valores));
