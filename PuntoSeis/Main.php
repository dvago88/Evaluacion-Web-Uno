<?php

$numerosPares = array();
$cont = 1;
while (count($numerosPares) < 10) {
    if ($cont % 2 == 0) {
        $numerosPares[] = $cont;
    }
    $cont++;
}
$cont = 1;
foreach ($numerosPares as $numero) {
    print_r("El ".$cont."° número es: ". $numero."\n");
    $cont++;
}