<?php

function exibeMensagem(string $mensagem)
{
	echo $mensagem . '<br>';
}

function exibeConta(array $conta)
{
	['titular' => $titular, 'saldo' => $saldo] = $conta;
	echo "<li>Titular: $titular . Saldo: $saldo</li>";
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

function titularLM(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}