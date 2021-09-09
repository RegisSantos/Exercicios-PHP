<?php

$carros = [
	'ITX-8789' => [
		'marca' => 'Toyota',
		'modelo' => 'Etios',
		'ano' => '2013'
	],

	'IQN-2789' => [
		'marca' => 'Renault',
		'modelo' => 'Clio',
		'ano' => '2010'
	],

	'AKH-2911' => [
		'marca' => 'Chevrolet',
		'modelo' => 'Celta',
		'ano' => '2006'
	],

	'IJL-5612' => [
		'marca' => 'Nissan', 
		'modelo' => 'Versa', 
		'ano' => '2018'
	],
];

foreach ($carros as $placas => $carros) {
	echo PHP_EOL;
	echo "Placa: " . $placas . PHP_EOL;
	echo "Marca: " . $carros['marca'] . PHP_EOL;
	echo "Modelo: " . $carros['modelo'] . PHP_EOL;
	echo "Ano: " . $carros['ano'] . PHP_EOL;
}

/*
exercicio_opcional_3.php
*/