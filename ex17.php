<?php

	$vel = readline("Informe a velocidade registrada do veículo: ");

	$excede = ($vel - 80);
	$multa = $excede * 5;
	$multaF = number_format($multa, 2, '.', '');

	if ($vel > 80) {
		echo PHP_EOL;
		echo("Ultrapassou o limite de velocidade em ") . $excede . ("Km") . PHP_EOL;
		echo("Valor da Multa: R$") . $multaF . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Dentro do limite de velocidade!") . PHP_EOL;
		echo("Não se aplica multa!") . PHP_EOL;
	}

/*

17) Escreva um programa que pergunte a velocidade de um carro.
Caso ultrapasse 80Km/h, exiba uma mensagem dizendo que o usuário foi multado.
Nesse caso, exiba o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.

*/