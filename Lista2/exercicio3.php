<?php

$vetor = array();
$soma = 0;
$maior = 0;
for ($i=0; $i <= 30; $i++){
    $vetor[$i] = $i;
    if ($i > $maior) {
        $maior = $i;
        $indiceMaior = $i;
    }
    $soma = $soma + $i;
}

$media = $soma / 30;

echo "O maior valor do vetor é: " . $maior . "<br>";
echo "O índice do maior valor é: " . $indiceMaior . "<br>";
echo "A soma dos valores do vetor é: " . $soma . "<br>";
echo "A média dos valores do vetor é: " . $media . "<br>";