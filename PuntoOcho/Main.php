<?php

function getCurrentYear()
{
    $currentDateTime = date('Y-m-d H:i:s');
    $otherDate = DateTime::createFromFormat('Y-m-d H:i:s', $currentDateTime);
    return $otherDate->format('Y');
}

function calcularEdad($annoNacimiento)
{
    $edad = getCurrentYear() - $annoNacimiento;
    print_r("Si nacio en 1991 usted tiene: " . $edad . "\n");
}

calcularEdad(1991);
calcularEdad(1995);
calcularEdad(1987);