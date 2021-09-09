<?php

	$n1 = readline("Informe a 1ª nota: ");
	$n2 = readline("Informe a 2ª nota: ");
	$n3 = readline("Informe a 3ª nota: ");

	$cal = ($n1 + $n2 + $n3) / 3;
	$media = number_format($cal, 1, '.', '');

	if ($media >= 7) {
		echo PHP_EOL . ("Média: " . $media) . PHP_EOL;
		echo("Aluno APROVADO!") . PHP_EOL;
	} else if ($media >= 5 && $media <= 6.9) {
		echo PHP_EOL . ("Média: " . $media) . PHP_EOL;
		echo("Aluno EM RECUPERAÇÃO!") . PHP_EOL;
	} else {
		echo PHP_EOL . ("Média: " . $media) . PHP_EOL;
		echo("Aluno REPROVADO!") . PHP_EOL;
	}

/*

27) Crie um programa que leia 3 notas de um aluno e calcule a sua média, mostrando uma mensagem no final, de acordo com a média atingida:
- Média até 4.9: REPROVADO
- Média entre 5.0 e 6.9: RECUPERAÇÃO
- Média 7.0 ou superior: APROVADO

*/