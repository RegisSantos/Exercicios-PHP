<?php

	$anoA = readline("Informe o ano atual: ");
	$anoN = readline("Informe seu ano de nascimento: ");

	$cal = ($anoA - $anoN);

	if ($cal >= 18) {
		echo PHP_EOL;
		echo("Você tem ") . $cal . (" anos.") . PHP_EOL;
		echo("Já atingiu a maioridade!") . PHP_EOL;
		echo("Pode votar!") . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Você tem ") . $cal . (" anos.") . PHP_EOL;
		echo("Já não atingiu a maioridade!") . PHP_EOL;
		echo("Não pode votar!") . PHP_EOL;
	}

/*

18) Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade dela e depois mostre se ela pode ou não votar.

*/