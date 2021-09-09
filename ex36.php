<?php

	$horas = readline("Informe quantas horas de atividades físicas você fez esse mês: ");

	if ($horas <= 10) {
		$pontos = 2;
	} else if ($horas > 10 && $horas <= 20) {
		$pontos = 5;
	} else {
		$pontos = 10;
	}

	$cal = ($pontos * 0.05);
	$premio = number_format($cal, 2, '.', '');

	echo PHP_EOL;
	echo("Quantidade de pontos que você ganhou: " . $pontos . " pontos!") . PHP_EOL;
	echo("Valor de cada ponto: R$0,05") . PHP_EOL;
	echo($pontos * " 0,05") . PHP_EOL;
	echo("Valor do prêmio: R$" . $premio) . PHP_EOL;

/*

36) Um programa de vida saudável quer dar pontos atividades físicas que podem ser trocados por dinheiro. O sistema funciona assim:
- Cada hora de atividade física no mês vale pontos
- até 10h de atividade no mês: ganha 2 pontos por hora
- de 10h até 20h de atividade no mês: ganha 5 pontos por hora
- acima de 20h de atividade no mês: ganha 10 pontos por hora
- A cada ponto ganho, o cliente fatura R$0,05 (5 centavos)

*/