<?php

function media($num1, $num2, $num3)
{
    return ($num1 + $num2 + $num3) / 3;
}

$media_valores = media($_POST["num1"], $_POST["num2"], $_POST["num3"]);
echo "A media dos valores é: ". $media_valores;