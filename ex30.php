<?php

	$sr1 = readline("Informe o 1º segmento de reta: ");
	$sr2 = readline("Informe o 2º segmento de reta: ");
	$sr3 = readline("Informe o 3º segmento de reta: ");

	if ($sr1 < ($sr2 + $sr3) && $sr2 < ($sr1 + $sr3) && $sr3 < ($sr1 + $sr2)) {
		echo PHP_EOL . ("Os três segmentos de reta FORMAM um triângulo!") . PHP_EOL;
			if ($sr1 == $sr2 && $sr2 == $sr3) {
				echo("O triângulo é do tipo EQUILÁTERO!") . PHP_EOL;
			} else if (($sr1 == $sr2 && $sr2 != $sr3) || ($sr1 != $sr2 && $sr2 == $sr3) || ($sr1 == $sr3 && $sr2 != $sr1)) {
				echo("O triângulo é do tipo ISÓSCELES!") . PHP_EOL;
			} else if ($sr1 != $sr2 && $sr2 != $sr3) {
				echo("O triângulo é do tipo ESCALENO!") . PHP_EOL;
			}
	} else {
		echo PHP_EOL . ("Os três segmentos de reta NÃO FORMAM um triângulo!") . PHP_EOL;
	}

/*

30) [DESAFIO] Refaça o algoritmo 25, acrescentando o recurso de mostrar que tipo de triângulo será formado:
- EQUILÁTERO: todos os lados iguais;
- ISÓSCELES: dois lados iguais;
- ESCALENO: todos os lados diferentes;

- Para três segmentos formarem um triângulo, o comprimento de cada lado deve ser menor que a soma dos outros dois;

*/