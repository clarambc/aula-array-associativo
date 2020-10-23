<?php

$comanda01 = [
    'cliente' => 'Maria',
    'totalGasto'=> 50
];

$comanda02 = [
    'cliente' => 'Joana',
    'totalGasto' => 100
];

$mesa01 = [$comanda01, $comanda02];

foreach ($mesa01 as $comanda) {
    echo $comanda['cliente'] . PHP_EOL;
    echo $comanda['totalGasto'] . PHP_EOL;
}
