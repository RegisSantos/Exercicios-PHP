<?php

	$n1 = readline("Informe o 1º número: ");
	$n2 = readline("Informe o 2º número: ");

	$soma = ($n1 + $n2);
	$sub = ($n1 - $n2);
	$mult = ($n1 * $n2);
	$div = ($n1 / $n2);
	$rest = ($n1 % $n2);
	$exp = ($n1 ** $n2);

	echo PHP_EOL;
	echo ("Operações matemáticas entre $n1 e $n2") . PHP_EOL;
	echo ("Soma: ") . $soma . PHP_EOL;
	echo ("Subtração: ") . $sub . PHP_EOL;
	echo ("Multiplicação: ") . $mult . PHP_EOL;
	echo ("Divisão: ") . $div . PHP_EOL;
	echo ("Resto da Divisão: ") . $rest . PHP_EOL;
	echo ("Exponenciação: ") . $exp . PHP_EOL;
	echo PHP_EOL;

/*

4) Desenvolva um algoritmo que leia dois números inteiros e mostre o somatório
entre eles.
Ex:
Digite um valor: 8
Digite outro valor: 5
A soma entre 8 e 5 é igual a 13.

*/