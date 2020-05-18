<?php
function percent($val, $percentual)
{
    return $val * ($percentual/ 100);
}

$numero = 1000;

echo ("Numero: " . $numero);
echo nl2br("\n5%: ". percent($numero, 5));
echo nl2br("\n15%: ". percent($numero, 15));
echo nl2br("\n50%: ". percent($numero, 50));
