<?php

	$n1 = readline("Informe o 1º número: ");
	$n2 = readline("Informe o 2º número: ");

	if ($n1 > $n2) {
		echo PHP_EOL . ("O número " . $n1 . " é o maior!") . PHP_EOL;
	} else if ($n1 < $n2) {
		echo PHP_EOL . ("O número " . $n2 . " é o maior!") . PHP_EOL;
	} else {
		echo PHP_EOL . ("Os números informados são IGUAIS!") . PHP_EOL;
	}

/*

26) Escreva um algoritmo que leia dois números inteiros e compare-os, mostrando na tela uma das mensagens abaixo:
- O primeiro valor é o maior
- O segundo valor é o maior
- Não existe valor maior, os dois são iguais

*/