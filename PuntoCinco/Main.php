<?php

$usuarioUno = array(
    "Nombre" => "Juan Perez",
    "Teléfono" => "322567898",
    "Dirección" => "Cll sur #35a-25",
    "Salario" => "3520000"
);
$usuarioDos = array(
    "Nombre" => "Ana Gaviria",
    "Teléfono" => "3014569852",
    "Dirección" => "Cll 90 #10-80",
    "Salario" => "4580000"
);
$usuarioTres = array(
    "Nombre" => "Pedro Mesa",
    "Teléfono" => "3108965474",
    "Dirección" => "Cll 85 #25-10",
    "Salario" => "1250000"
);
$usuarioCuatro = array(
    "Nombre" => "Catalina Castaño",
    "Teléfono" => "3148555555",
    "Dirección" => "Cll 100sur #35a-27",
    "Salario" => "3800000"
);
$usuarioCinco = array(
    "Nombre" => "Gabriel Rodriguez",
    "Teléfono" => "3001234879",
    "Dirección" => "Cr 37 #100-20",
    "Salario" => "6490000"
);

$usuariosSucursalA = array($usuarioUno, $usuarioDos, $usuarioTres, $usuarioCuatro, $usuarioCinco);
$sumatoriaSalarios = 0;
$sumatoriaSalariosB = 20000000;
$sumatoriaSalariosC = 15000000;

foreach ($usuariosSucursalA as $usuario) {
    foreach ($usuario as $value) {
        print_r($value . "-");
    }
    print_r("\n");
    $sumatoriaSalarios += $usuario["Salario"];
}
if ($sumatoriaSalarios > $sumatoriaSalariosB && $sumatoriaSalarios > $sumatoriaSalariosC) {
    print_r("El mayor ingreso lo tiene la sucursal A");
} else if ($sumatoriaSalariosB > $sumatoriaSalarios && $sumatoriaSalariosB > $sumatoriaSalariosC) {
    print_r("El mayor ingreso lo tiene la sucursal B");
} else {
    print_r("El mayor ingreso lo tiene la sucursal C");
}
