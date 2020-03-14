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
    return $edad;
}

function getBiotipo($estatura)
{
    if ($estatura < 170) {
        return "Biotipo bajo";
    } else if ($estatura >= 170 && $estatura < 180) {
        return"Biotipo promedio";
    } else {
        return "Biotipo superior";
    }
}

$jugador1 = array(
    "Nombre" => "Radamel Falcao",
    "AnnoNacimiento" => 1986,
    "Posicion" => "Delantero",
    "Estatura" => 177
);
$jugador2 = array(
    "Nombre" => "James Rodriguez",
    "AnnoNacimiento" => 1991,
    "Posicion" => "Medio Campo",
    "Estatura" => 181
);
$jugador3 = array(
    "Nombre" => "Juan Cuadraro",
    "AnnoNacimiento" => 1988,
    "Posicion" => "Delantero",
    "Estatura" => 178
);
$jugador4 = array(
    "Nombre" => "Yerry Mina",
    "AnnoNacimiento" => 1994,
    "Posicion" => "Defensor",
    "Estatura" => 195
);
$jugador5 = array(
    "Nombre" => "David Ospina",
    "AnnoNacimiento" => 1988,
    "Posicion" => "Portero",
    "Estatura" => 183
);
$jugador6 = array(
    "Nombre" => "Davison Sanchez",
    "AnnoNacimiento" => 1996,
    "Posicion" => "Defensor",
    "Estatura" => 187
);
$jugador7 = array(
    "Nombre" => "Duvan Zapata",
    "AnnoNacimiento" => 1991,
    "Posicion" => "Delantero",
    "Estatura" => 186
);
$jugador8 = array(
    "Nombre" => "Wilmar Barrios",
    "AnnoNacimiento" => 1993,
    "Posicion" => "Medio campista",
    "Estatura" => 178
);
$jugador9 = array(
    "Nombre" => "Mateus Uribe",
    "AnnoNacimiento" => 1991,
    "Posicion" => "Medio campista",
    "Estatura" => 180
);
$jugadores = array($jugador1, $jugador2, $jugador3, $jugador4, $jugador5, $jugador6, $jugador6, $jugador8, $jugador9);

$cont = 1;
foreach ($jugadores as $jugador) {
    print_r("Jugador " . $cont . "\n");
    print_r($jugador["Nombre"] . "\n");
    print_r(calcularEdad($jugador["AnnoNacimiento"]) . "\n");
    print_r(getBiotipo($jugador["Estatura"]). "\n");

}