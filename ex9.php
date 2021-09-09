<?php

	$dinheiro = readline("Informe o valor que você tem em R$: ");

	$conversao = ($dinheiro / 3.45);
	$dolar = number_format($conversao, 2, '.', '');

	echo PHP_EOL;
	echo("Você tem R$") . $dinheiro . PHP_EOL;
	echo("Você pode comprar US$") . $dolar . PHP_EOL;

/*

9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$) e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.

*/