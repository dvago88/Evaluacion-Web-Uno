<?php


$horasTrabajadas = 36;
if ($horasTrabajadas <= 40) {
    $sueldo = $horasTrabajadas * 20000;
    print_r("Para un total de " . $horasTrabajadas . " horas, se obtiene un valor hora de $20000\n");
    print_r("El salario devengado a la semana es de: " . $sueldo);
}