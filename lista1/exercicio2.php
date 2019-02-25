<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$salario = 1000;

if ($salario > 1000) {
    $bonus = $salario * 0.30;
    $salarioFinal = $salario + $bonus;
    echo "Seu salário inicial é: " . $salario . ". Seu bônus é: " . $bonus . ". Seu salário final é: " . $salarioFinal . ".";
} else {
    $bonus = $salario * 0.40;
    $salarioFinal = $salario + $bonus;
    echo "Seu salário inicial é: " . $salario . ". Seu bônus é: " . $bonus . ". Seu salário final é: " . $salarioFinal . "."; 
}
