<?php
	
	$n = readline("Informe um número do tipo REAL: ");

	$dobro = ($n * 2);
	$tercaP = ($n / 3);
	$tercaPf = number_format($tercaP, 3, '.', '');

	echo PHP_EOL;
	echo("Número informado: $n") . PHP_EOL;
	echo("O dobro de $n é ") . $dobro . PHP_EOL;
	echo("A terça parte de $n é ") . $tercaPf . PHP_EOL;
	echo PHP_EOL;

/*

7) Crie um algoritmo que leia um número real e mostre na tela o seu dobro e a sua terça parte.
Ex:
Digite um número: 3.5
O dobro de 3.5 é 7.0
A terça parte de 3.5 é 1.16666

*/