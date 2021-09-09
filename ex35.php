<?php

	echo PHP_EOL;
	$tipo = readline("Informe o tipo de carro alugado (1 - Popular / 2 - Luxo): ");
	$dias = readline("Informe por quantos dias o carro foi utilizado: ");
	$dist = readline("Informe a quantidade de Km percorridos: ");

	if ($tipo == 1) {
		$precoDia = ($dias * 90);
		if ($dist <= 100) {
			$precoKm = ($dist * 0.20);
		} else {
			$precoKm = ($dist * 0.10);
		}

		$cal = ($precoDia + $precoKm);
		$precoF = number_format($cal, 2, '.', '');

		echo PHP_EOL;
		echo("Tipo de Carro: POPULAR") . PHP_EOL;
		echo("Dias utilizados: " . $dias) . PHP_EOL;
		echo("Distância percorrida: " . $dist . ("Km")) . PHP_EOL;
		echo("Preço total por dias utilizado(s): R$" . $precoDia . ".00") . PHP_EOL;
		echo("Preço por Km: R$" . $precoKm) . PHP_EOL;
		echo("Preço Total: R$" . $precoF) . PHP_EOL;

	} else if ($tipo == 2) {
		$precoDia = ($dias * 150);
		if ($dist <= 200) {
			$precoKm = ($dist * 0.30);
		} else {
			$precoKm = ($dist * 0.25);
		}

		$cal = ($precoDia + $precoKm);
		$precoF = number_format($cal, 2, '.', '');

		echo PHP_EOL;
		echo("Tipo de Carro: Luxuoso") . PHP_EOL;
		echo("Dias utilizados: " . $dias) . PHP_EOL;
		echo("Distância percorrida: " . $dist . ("Km")) . PHP_EOL;
		echo("Preço total por dias utilizado(s): R$" . $precoDia) . PHP_EOL;
		echo("Preço por Km: R$" . $precoKm) . PHP_EOL;
		echo("Preço Total: R$" . $precoF) . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Você não informou corretamente o tipo de carro!") . PHP_EOL;
		echo("Informe o tipo de carro usando: (1 - Popular / 2 - Luxo): ") . PHP_EOL;
	}

/*

35) Uma empresa de aluguel de carros precisa cobrar pelos seus serviços.
O aluguel de um carro custa R$90 por dia para carro popular e R$150 por dia para carro de luxo.
Além disso, o cliente paga por Km percorrido.
Faça um programa que leia o tipo de carro alugado (popular ou luxo), quantos dias de aluguel e quantos Km foram percorridos.
No final mostre o preço a ser pago de acordo com a tabela a seguir:

- Carros populares (aluguel de R$90 por dia)
- Até 100Km percorridos: R$0,20 por Km
- Acima de 100Km percorridos: R$0,10 por Km
- Carros de luxo (aluguel de R$150 por dia)
- Até 200Km percorridos: R$0,30 por Km
- Acima de 200Km percorridos: R$0,25 por Km

*/