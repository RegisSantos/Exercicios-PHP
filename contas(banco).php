<?php

$contasCorrentes = [
	'123.456.789-10' => [
	'titular' => 'Vinicius',
	'saldo' => 1000
],

	'123.456.789-11' => [
	'titular' => 'Maria',
	'saldo' => 10000
],

	'123.456.789-12' => [
	'titular' => 'Alberto',
	'saldo' => 1400
]

];

$contasCorrentes['123.456.789-13'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 200);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 300);