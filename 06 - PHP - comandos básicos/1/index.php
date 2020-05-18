<?php

function sum($num1, $num2)
{
    $result = $num1 + $num2;
    return $result;
}
function multiplication($num1, $num2)
{
    return $num1 * $num2;
}

$num1 = 5;
$num2 = 6;

echo "1° Numero: " . $num1;
echo nl2br("\n 2° Numero: " . $num2);
$result = sum($num1, $num2);
echo nl2br("\n Soma: " . $result);
echo nl2br("\n Multiplicação: " . multiplication($result, $num1));
echo nl2br("\n Quadrado " . $num1 . " = " . poW($num1, 2));
echo nl2br("\n Quadrado " . $num2 . " = " . poW($num2, 2));
echo nl2br("\nSoma Quadarados: " . sum(poW($num1, 2), pow($num2, 2)));
