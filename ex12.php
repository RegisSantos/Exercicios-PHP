<?php

	$preco = readline("Informe o preço do produto: ");
	$cal = ($preco * 5) / 100;
	$desc = ($preco - $cal);

	echo PHP_EOL;
	echo("Valor do produto R$: ") . $preco . PHP_EOL;
	echo("Valor de desconto R$: ") . $cal . PHP_EOL;
	echo("Valor a pagar R$: ") . $desc . PHP_EOL;

/*

12) Crie um programa que leia o preço de um produto, calcule e mostre o seu PREÇO PROMOCIONAL, com 5% de desconto.

*/