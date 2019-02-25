<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$n1 = 10; 
$n2 = 4;
$n3 = 8;
$n4 = 6;
$nf = ($n1 + $n2 + $n3 + $n4) / 4 ;

if ($nf >= 6 ) {
    echo "Aprovado. Sua média foi: " . $nf . ".";
} else {
    echo "Reprovado. Sua média foi: ". $nf . ".";
}

