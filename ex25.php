<?php

	$sr1 = readline("Informe o 1º segmento de reta: ");
	$sr2 = readline("Informe o 2º segmento de reta: ");
	$sr3 = readline("Informe o 3º segmento de reta: ");

	if ($sr1 < ($sr2 + $sr3) && $sr2 < ($sr1 + $sr3) && $sr3 < ($sr1 + $sr2)) {
		echo PHP_EOL . ("Os três segmentos de reta FORMAM um triângulo!") . PHP_EOL;
	} else {
		echo PHP_EOL . ("Os três segmentos de reta NÃO FORMAM um triângulo!") . PHP_EOL;
	}

/*

25) [DESAFIO] Crie um programa que leia o tamanho de três segmentos de reta.
Analise seus comprimentos e diga se é possível formar um triângulo com essas retas.
Matematicamente, para três segmentos formarem um triângulo, o comprimento de cada lado deve ser menor que a soma dos outros dois.

*/