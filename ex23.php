<?php
	
	$nome = readline("Informe o nome do(a) cliente: ");
	$sexo = readline("Informe o sexo do(a) cliente: ");
	$preco = readline("Informe o valor das compras de " . $nome . ": R$");

	if ($sexo == 'F' || $sexo == 'f') {
		$cal1 = ($preco * 13) / 100;
		$conv1 = number_format($cal1, 2, '.', '');
		$cal2 = ($preco - $cal1);
		$conv2 = number_format($cal2, 2, '.', '');
		echo PHP_EOL . ("Desconto especial para mulheres no Dia da Mulher!") . PHP_EOL;
		echo("Nome da cliente: " . $nome) . PHP_EOL;
		echo("Valor das compras: R$" . $preco) . PHP_EOL;
		echo("Valor do desconto: R$" . $conv1) . PHP_EOL;
		echo("Preço final: R$ " . $conv2) . PHP_EOL;
	} else if ($sexo == 'M' || $sexo == 'm') {
		$cal1 = ($preco * 5) / 100;
		$conv1 = number_format($cal1, 2, '.', '');
		$cal2 = ($preco - $cal1);
		$conv2 = number_format($cal2, 2, '.', '');
		echo PHP_EOL . ("Nome do cliente: " . $nome) . PHP_EOL;
		echo("Valor das compras: R$" . $preco) . PHP_EOL;
		echo("Valor do desconto: R$" . $conv1) . PHP_EOL;
		echo("Preço final: R$ " . $conv2) . PHP_EOL;
	} else {
		echo PHP_EOL . ("Informação errada!") . PHP_EOL;
		echo("Informe corretamente o sexo do(a) cliente (M/F)") . PHP_EOL;
		echo("Tente Novamente!") . PHP_EOL;
	}

/*

23) Numa promoção exclusiva para o Dia da Mulher, uma loja quer dar descontos para todos, mas especialmente para mulheres.
Faça um programa que leia nome, sexo e o valor das compras do cliente e calcule o preço com desconto. Sabendo que:
- Homens ganham 5% de desconto
- Mulheres ganham 13% de desconto

*/