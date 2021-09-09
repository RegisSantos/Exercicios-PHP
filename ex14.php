<?php

	$km = readline("Informe a quantidade de Km percorridos com o veículo: ");
	$dias = readline("Informe a quantidade de dias de uso do veículo: ");

	$precoKm = ($km * 0.2);
	$precoDias = ($dias * 90);
	$precoTotal = ($precoKm + $precoDias);
	$precoTotalF = number_format($precoTotal, 2, '.', '');

	echo PHP_EOL;
	echo("Quantidade de Km percoridos: ") . $km . PHP_EOL;
	echo("Quantidade de dias de uso do veículo: ") . $dias . PHP_EOL;
	echo("Valor a cobrar por Km rodado: R$") . $precoKm . PHP_EOL;
	echo("Valor a cobrar por dias de uso: R$") . $precoDias . PHP_EOL;
	echo("Valor total a pagar: R$") . $precoTotalF . PHP_EOL;
	

/*

14) A locadora de carros precisa da sua ajuda para cobrar seus serviços.
Escreva um programa que pergunte a quantidade de Km percorridos por um carro alugado e a quantidade de dias pelos quais ele foi alugado.
Calcule o preço total a pagar, sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.

*/