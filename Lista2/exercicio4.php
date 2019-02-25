<?php

$vetor = array();
$mod = 0;

echo "VETOR" . "<br>";
$cont = 2;
for ($i=0; $i <= 50; $i++) {
    $vetor[$i] = $cont;
    $cont = $cont + 2;
    
   echo "| Índice: " . $i . " | Valor: " . $vetor[$i] . " |" ."<br>";
}
