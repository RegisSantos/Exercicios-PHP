<?php

$carros = [
	'LMS-2232' => [
		'marca' => 'VW',
		'modelo' => 'Golf'
	],

	'KLM-1234' => [
		'marca' => 'Ford',
		'modelo' => 'Fiesta'
	],

	'OPN-5612' => [
		'marca' => 'Fiat',
		'modelo' => 'Uno'
	],
];

foreach($carros as $placas => $carros) {
	echo $placas . " " . $carros['marca'] . " " . $carros['modelo'] . PHP_EOL;
}//fim foreach