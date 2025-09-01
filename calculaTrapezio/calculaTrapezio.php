<?php
$baseMaior = $_REQUEST['maior'];
$baseMenor = $_REQUEST['menor'];
$altura = $_REQUEST['altura'];

$somaBase = $baseMaior + $baseMenor;
$areaTapezio = $somaBase * $altura / 2;

echo "A área do trapézio é de $areaTapezio <br>"
?>