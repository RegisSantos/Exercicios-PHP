<?php
	
	$ano = readline("Informe um determinado ano: ");

	if (($ano % 4 == 0 && $ano % 100 !=0) || ($ano % 400 == 0)) {
		echo PHP_EOL;
		echo("O ano de " . $ano . (" é um ano bissexto!") . PHP_EOL);
	} else {
		echo PHP_EOL;
		echo("O ano de " . $ano . (" não é um ano bissexto!") . PHP_EOL);
	}

/*

21) Faça um algoritmo que leia um determinado ano e mostre se ele é ou não BISSEXTO.

Para que um ano seja bissexto, precisa respeitar as seguintes proposições:

* o resto da divisão do ano por 4 tem que ser IGUAL zero, e o resto da divisão por 100 tem que ser DIFERENTE de zero;
ou
* o resto da divisão do ano por 400 tem que ser IGUAL a zero;

*/