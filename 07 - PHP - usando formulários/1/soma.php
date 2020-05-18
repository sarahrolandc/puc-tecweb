<?php

$soma_valores = sum($_POST["val1"],$_POST["val2"]);

$result = "<label> Soma: </label>";
$result.= "<label>".$soma_valores."</label>";
$result.="<br/>";
$result.= "<label> Multiplicação (soma de valores x primeiro número): </label>";
$result.= "<label>".mult($_POST["val1"],$soma_valores)."</label>";
$result.="<br/>";
$result.= "<label>Potencia val1: </label>";
$result.= "<label>".poW($_POST["val1"],2)."</label>";
$result.="<br/>";
$result.= "<label>Potencia val2: </label>";
$result.= "<label>".poW($_POST["val2"],2)."</label>";
echo $result;
function sum ($val1, $val2){return  $val1 + $val2; }
function mult ($val1, $val2){ return $val1 * $val2;}

?>