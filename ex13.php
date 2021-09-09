<?php

	$salario = readline("Informe o salário atual do(a) funcionário(a): ");
	$cal = ($salario * 15) / 100;
	$salarioF = ($salario + $cal);

	echo PHP_EOL;
	echo("Salário atual: R$") . $salario . PHP_EOL;
	echo("Valor de Reajuste: R$") . $cal . PHP_EOL;
	echo("Salário reajustado: R$") . $salarioF . PHP_EOL;

/*

13) Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o seu novo salário, com 15% de aumento.

*/