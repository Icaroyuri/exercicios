<?php
$aluno = $_REQUEST['nome'];
$dis = $_REQUEST['disciplina'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];
$nota3 = $_REQUEST['nota3'];

function calculaMedia ($n1, $n2, $n3){
    $media = ($n1 + $n2 + $n3) / 3;
    return $media;
}

$media = calculaMedia($nota1, $nota2, $nota3);
echo "A média do aluno $aluno da dsciplina $dis é de" . round($media, 1) . "<br>";
?>