<?php

$xmen90s = array();
$xmen90s[0] = "Ciclope";
$xmen90s[1] = "Fera";
$xmen90s[2] = "Vampira";
$xmen90s[3] = "Gambit";
$xmen90s[4] = "Psylocke";
$xmen90s[5] = "Wolverine";
$xmen90s[6] = "Jubileu";
$xmen90s[7] = "Cristal";
$xmen90s[8] = "Longshot";
$xmen90s[9] = "Forge (às vezes)";

echo "Equipe Azul dos X-Men nos anos 90:" . "<br>" . "<br>";
echo "<select>";
echo "<option> Membros da Equipe </option>";
for ($i=0; $i <= 9; $i++) {
    echo "<option>" . $xmen90s[$i] . "</option>";
}
echo "</select>";