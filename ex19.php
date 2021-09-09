<?php

	$nome = readline("Informe o nome do(a) aluno(a):" . PHP_EOL);
	$n1 = readline("Informe a 1ª nota de " . $nome . ":" . PHP_EOL);
	$n2 = readline("Informe a 2ª nota de " . $nome . ":" . PHP_EOL);
	$n3 = readline("Informe a 3ª nota de " . $nome . ":" . PHP_EOL);

	$calMedia = ($n1 + $n2 + $n3) / 3;
	$media = number_format($calMedia, 2, '.', '');

	if ($media >= 7) {
		echo PHP_EOL;
		echo("Média de " . $nome . (": ") . $media . PHP_EOL);
		echo($nome . (" teve um bom aproveitamento, pois está APROVADO!") . PHP_EOL);
	} else {
		echo PHP_EOL;
		echo("Média de " . $nome . (": ") . $media . PHP_EOL);
		echo($nome . (" não teve um bom aproveitamento, pois está REPROVADO!") . PHP_EOL);
	}

/*

19) Crie um algoritmo que leia o nome e as duas notas de um aluno, calcule a sua média e mostre na tela.
No final, analise a média e mostre se o aluno teve ou não um bom aproveitamento (se ficou acima da média 7.0).

*/

/*

$mediaf = number_format($media, 2, '.', '');   //duas casas decimais;

*/