<?php

	$dist = readline("Informe a distância (em Km) que deseja percorrer: ");

	if ($dist <= 200) {
		$cal = ($dist * 0.5);
		$preco = number_format($cal, 2, '.', '');
		echo PHP_EOL . ("Distância a percorrer: " . $dist . "Km") . PHP_EOL;
		echo("Preço por Km rodado: R$0.50") . PHP_EOL;
		echo("Total a pagar: R$" . $preco) . PHP_EOL;
	} else {
		$cal = ($dist * 0.45);
		$preco = number_format($cal, 2, '.', '');
		echo PHP_EOL . ("Distância a percorrer: " . $dist . "Km") . PHP_EOL;
		echo("Preço por Km rodado: R$0.45") . PHP_EOL;
		echo("Total a pagar: R$" . $preco) . PHP_EOL;
	}

/*

24) Faça um algoritmo que pergunte a distância que um passageiro deseja percorrer em Km.
Calcule o preço da passagem, cobrando R$0.50 por Km para viagens até 200Km e R$0.45 para viagens mais longas.

*/