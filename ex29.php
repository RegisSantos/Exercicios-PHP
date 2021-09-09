<?php

	$nome = readline("Informe o nome do(a) funcionário(a): ");
	$sal = readline("Informe o salário atual de " . $nome . ": ");
	$anos = readline("Informe quantos anos " . $nome . " trabalha na empresa: ");

	if ($anos < 3) {

		$cal1 = ($sal * 3) / 100;
		$reaj1 = number_format($cal1, 2, '.', '');
		$cal2 = ($sal + $cal1);
		$reaj2 = number_format($cal2, 2, '.', '');
		echo PHP_EOL . ("Nome do(a) funcionário: " . $nome) . PHP_EOL;
		echo("Tempo de trabalho na empresa: " . $anos . " anos") . PHP_EOL;
		echo("Valor do salário atual: R$" . $sal) . PHP_EOL;
		echo("Valor do reajuste: R$" . $reaj1) . PHP_EOL;
		echo("Valor do salário reajustado: R$" . $reaj2) . PHP_EOL;

		} else if ($anos >= 3 && $anos < 10) {

			$cal1 = ($sal * 12.5) / 100;
			$reaj1 = number_format($cal1, 2, '.', '');
			$cal2 = ($sal + $cal1);
			$reaj2 = number_format($cal2, 2, '.', '');
			echo PHP_EOL . ("Nome do(a) funcionário: " . $nome) . PHP_EOL;
			echo("Tempo de trabalho na empresa: " . $anos . " anos") . PHP_EOL;
			echo("Valor do salário atual: R$" . $sal) . PHP_EOL;
			echo("Valor do reajuste: R$" . $reaj1) . PHP_EOL;
			echo("Valor do salário reajustado: R$" . $reaj2) . PHP_EOL;

			} else {

				$cal1 = ($sal * 20) / 100;
				$reaj1 = number_format($cal1, 2, '.', '');
				$cal2 = ($sal + $cal1);
				$reaj2 = number_format($cal2, 2, '.', '');
				echo PHP_EOL . ("Nome do(a) funcionário: " . $nome) . PHP_EOL;
				echo("Tempo de trabalho na empresa: " . $anos . " anos") . PHP_EOL;
				echo("Valor do salário atual: R$" . $sal) . PHP_EOL;
				echo("Valor do reajuste: R$" . $reaj1) . PHP_EOL;
				echo("Valor do salário reajustado: R$" . $reaj2) . PHP_EOL;
			
			}

/*

29) Desenvolva um programa que leia o nome de um funcionário, seu salário, quantos anos ele trabalha na empresa e mostre seu novo salário,
reajustado de acordo com a tabela a seguir:
- Até 3 anos de empresa: aumento de 3%
- entre 3 e 10 anos: aumento de 12.5%
- 10 anos ou mais: aumento de 20%

$mediaf = number_format($media, 2, '.', '');

*/