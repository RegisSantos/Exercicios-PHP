<?php

	$nome = readline("Informe o nome do(a) funcionário(a): ");
	$gen = readline("Informe o gênero de " . $nome . " (M/F): ");
	$salA = readline("Informe o saláro atual de " . $nome . ": ");
	$anos = readline("Informe quantos anos " . $nome . " trabalha na empresa: ");

	if ($gen == 'F' || $gen == 'f') {
		if ($anos < 15) {
			$cal = ($salA * 5) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 5%") . PHP_EOL;
		} else if ($anos >= 15 && $anos < 20) {
			$cal = ($salA * 12) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 12%") . PHP_EOL;
		} else {
			$cal = ($salA * 23) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 23%") . PHP_EOL;
		}
	} else if ($gen == 'M' || $gen == 'f') {
		if ($anos < 20) {
			$cal = ($salA * 3) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 3%") . PHP_EOL;
		} else if ($anos >= 20 && $anos < 30) {
			$cal = ($salA * 13) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 13%") . PHP_EOL;
		} else {
			$cal = ($salA * 25) / 100;
			echo PHP_EOL;
			echo("Porcentagem de Rejuste: 25%") . PHP_EOL;
		}
	}

	$calF = number_format($cal, 2, '.', '');
	$reaj = ($salA + $cal);
	$reajF = number_format($reaj, 2, '.', '');

	echo("Valor do Reajuste: R$" . $calF) . PHP_EOL;
	echo("Valor do Salário Reajustado: R$" . $reajF) . PHP_EOL;

/*

37) Uma empresa precisa reajustar o salário dos seus funcionários, dando um aumento de acordo com alguns fatores.
Faça um programa que leia o salário atual, o gênero do funcionário e há quantos anos esse funcionário trabalha na empresa.
No final, mostre o seu novo salário, baseado na tabela a seguir:

- Mulheres
- menos de 15 anos de empresa: +5%
- de 15 até 20 anos de empresa: +12%
- mais de 20 anos de empresa: +23%

- Homens
- menos de 20 anos de empresa: +3%
- de 20 até 30 anos de empresa: +13%
- mais de 30 anos de empresa: +25%

*/