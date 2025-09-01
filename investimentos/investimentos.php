<?php
$invest = $_REQUEST['invest'];
$valor = $_REQUEST['valor'];

switch ($invest) {
    case 1:
        $valorcor = $valor * 1.3;
        break;
    case 2:
        $valorcor = $valor * 1.4;
}
echo "Em um mês o seu dinheiro vai ficar em: R$$valorcor<br>";
?>