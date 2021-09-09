<?php
	
	echo PHP_EOL;
	$valorCasa = readline("Informe o valor da casa: ");
	$salario = readline("Informe o salário do comprador: ");
	$anos = readline("Informe em quantos anos o comprador pretende pagar: ");

	$meses = ($anos * 12);
	$cal = ($valorCasa / $meses);
	$valorPercela = number_format($cal, 2, '.', '');
	$emprestimo = ($salario * 30) / 100;

	echo PHP_EOL;
	echo("Valor da Casa: R$" . $valorCasa) . PHP_EOL;
	echo("Salário do comprador: R$" . $salario) . PHP_EOL;
	echo("Anos para pagamento: " . $anos) . PHP_EOL;
	echo("Valor da parcela: R$" . $valorPercela) . PHP_EOL;

	if ($valorPercela > $emprestimo) {
		echo PHP_EOL;
		echo("Empréstimo NEGADO!") . PHP_EOL;
		echo("Valor da parcela excede 30% da renda do comprador!") . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Empréstimo APROVADO!") . PHP_EOL;
		echo("Parabéns pela aquisição!") . PHP_EOL;
	}

/*

33) Escreva um programa para aprovar ou não o empréstimo bancário para a compra de uma casa.
O programa vai perguntar o valor da casa, o salário do comprador e em quantos anos ele vai pagar.
Calcule o valor da prestação mensal, sabendo que ela não pode exceder 30% do salário ou então o empréstimo será negado.

*/