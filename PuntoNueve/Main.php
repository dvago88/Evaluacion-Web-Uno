<?php

//La estatura está en cm
function getBiotipo($estatura)
{
    if ($estatura < 170) {
        print_r("Para la altura de " . $estatura . " su biotipo es: Biotipo Bajo\n");
    } else if ($estatura >= 170 && $estatura < 180) {
        print_r("Para la altura de " . $estatura . " su biotipo es: Biotipo Promedio\n");
    } else {
        print_r("Para la altura de " . $estatura . " su biotipo es: Biotipo Superior\n");
    }
}

getBiotipo(165);
getBiotipo(170);
getBiotipo(180);