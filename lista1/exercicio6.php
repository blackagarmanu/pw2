<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$n1 = 3;
$n2 = 2;
$n3 = 1;

if (($n1 > $n2) && ($n1 > $n3)) {
    echo "N1 é maior que N2 e N3.";
} elseif (($n2 > $n1) && ($n2 > $n3)) {
    echo "N2 é maior que N1 e N3.";
} elseif (($n3 > $n1) && ($n3 > $n2)) {
    echo "N3 é maior que N1 e N2.";
}
