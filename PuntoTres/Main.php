<?php

$numeroParesVendidos = 5;
$precioPar = 150000;
$precioFinal = 0;
$totalDescuento = 0;
$costoNeto = 0;
$descuentoEscrito = "";

if ($numeroParesVendidos == 3) {
    $costoNeto = $numeroParesVendidos * $precioPar;
    $precioFinal = $costoNeto - $costoNeto * 0.10;
    $descuentoEscrito = "10%";
    $totalDescuento = $costoNeto - $precioFinal;
} elseif ($numeroParesVendidos > 3 && $numeroParesVendidos <= 5) {
    $costoNeto = $numeroParesVendidos * $precioPar;
    $precioFinal = $costoNeto - $costoNeto * 0.20;
    $descuentoEscrito = "20%";
    $totalDescuento = $costoNeto - $precioFinal;
} else {
    $costoNeto = $numeroParesVendidos * $precioPar;
    $precioFinal = $costoNeto - $costoNeto * 0.40;
    $descuentoEscrito = "40%";
    $totalDescuento = $costoNeto - $precioFinal;
}

print_r("Cantidad vendida: " . $numeroParesVendidos . "\n");
print_r("Costo neto: " . $costoNeto . "\n");
print_r("Descuento: " . $descuentoEscrito . "\n");
print_r("Valor descuento:" . $totalDescuento . "\n");
print_r("Valor total a pagar:" . $precioFinal . "\n");