<?php

$altura = 1.78;
$peso = 85;

$imc = $peso / ($altura * $altura);

print_r("Señor usuario su estatura es de: " . $altura . " y su peso es de: " . $peso . "\n");
print_r("Su indice de masa corporal es de: " . $imc);
if ($imc <= 18.4) {
    print_r(". Por tanto usted tiene insuficiencia de peso");
} elseif ($imc < 24.9) {
    print_r(". Por tanto usted tiene peso normal");
} elseif ($imc < 29.9) {
    print_r(". Por tanto usted tiene sobrepeso");
} elseif ($imc < 34.9) {
    print_r(". Por tanto usted tiene obesidad 1");
} elseif ($imc < 39.9) {
    print_r(". Por tanto usted tiene obesidad 2");
} else {
    print_r(". Por tanto usted tiene obesidad 3");
}
