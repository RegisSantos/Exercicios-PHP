<?php

	$dias = readline("Informe a quantidade de dias trabalhados: ");

	$precoDia = (8 * 25);
	$salario = ($precoDia * $dias);
	$salarioF = number_format($salario, 2, '.', '');

	echo PHP_EOL;
	echo("Quantidade de dias trabalhados: ") . $dias . PHP_EOL;
	echo("Valor pago por dias trabalhados: R$") . $precoDia . PHP_EOL;
	echo("Valor final a ser pago: R$") . $salarioF . PHP_EOL;


/*

15) Crie um programa que leia o número de dias trabalhados em um mês e mostre o salário de um funcionário,
sabendo que ele trabalha 8 horas por dia e ganha R$25 por hora trabalhada.

*/