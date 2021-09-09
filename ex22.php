<?php

	$anoA = readline("Informe o ano atual: ");
	$anoN = readline("Informe o ano do seu nascimento: ");

	$cal = ($anoA - $anoN);

	if ($cal < 18) {
		$dif = (18 - $cal);
		echo PHP_EOL;
		echo("Você tem " . $cal . " anos!") . PHP_EOL;
		echo("Faltam " . $dif . " anos para o seu alistamento!") . PHP_EOL;
	} else if ($cal > 18) {
		$dif = ($cal - 18);
		echo PHP_EOL;
		echo("Você tem " . $cal . " anos!") . PHP_EOL;
		echo("O seu alistamento foi há " . $dif . " anos!") . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Você tem " . $cal . " anos!") . PHP_EOL;
		echo("Você precisa se alistar e se apresentar nas forças armadas esse ano!") . PHP_EOL;
	}

/*

22) Escreva um programa que leia o ano de nascimento de um rapaz e mostre a sua situação em relação ao alistamento militar.
- Se estiver antes dos 18 anos, mostre em quantos anos faltam para o alistamento.
- Se já tiver depois dos 18 anos, mostre quantos anos já se passaram do alistamento.

*/