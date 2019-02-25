<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$media = 7.5 ;
$frequencia = 0.75;

if (($media >= 6) && ($frequencia >= 0.75)) {
    echo "Sua média é: " . $media . " e sua frequência é: " . $frequencia . ". Você está aprovado.";
} else {
    echo "Sua média é: " . $media . " e sua frequência é: " . $frequencia . ". Você está reprovado.";
}
