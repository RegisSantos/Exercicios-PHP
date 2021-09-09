<?php

function exibeMensagem(string $mensagem)
{
	echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
	if($valorASacar > $conta['saldo']) {
		exibeMensagem("Você não pode sacar esse valor!");
		echo PHP_EOL;
		} else {
			$conta['saldo'] -= $valorASacar;
		}//fim else

		return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
	if($valorDeposito < 0) {
		exibeMensagem("Depósito Inválido!");
	} else {
		$conta['saldo'] += $valorDeposito;
	}

	return $conta;
}


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


	foreach($contasCorrentes as $cpf => $conta) {
		exibeMensagem(
			"CPF: $cpf  -  Titular: {$conta['titular']}  -  Conta: {$conta['saldo']}"
		);
		
	}//fim foreach


	/*
	foreach($contasCorrentes as $cpf => $conta) {
		exibeMensagem("CPF: " . $cpf);
		exibeMensagem("Titular: " . $conta['titular']);
		exibeMensagem("Saldo: " . $conta['saldo']);
		echo PHP_EOL;
		
	}//fim foreach

	*/   //EU ESTAVA UTILIZANDO ASSIM




	/*
	foreach($contasCorrentes as $conta) {
		echo $conta['titular'] . PHP_EOL;
		echo $conta['saldo'] . PHP_EOL;
	}//fim foreach
	*/



	/*
	function adiciona2($x) {
	return $x + 2;
	}

	$resultado = adiciona2($x = 5);
	echo $resultado;
	*/