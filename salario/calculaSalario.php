<?php
$salario = $_REQUEST['salario'];
$vendas = $_REQUEST['vendas'];

$salarioTotal = $salario + $vendas * 0.04;

echo "Salário do mês: $salarioTotal<br>";
?>