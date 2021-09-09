<?php
	
	echo PHP_EOL;
	$n1 = readline("Informe a 1ª nota: ");
	$n2 = readline("Informe a 2ª nota: ");
	$n3 = readline("Informe a 3ª nota: ");
	echo PHP_EOL;

	$media = ($n1 + $n2 + $n3) / 3;
	$mediaf = number_format($media, 2, '.', '');

	echo PHP_EOL;
	echo ("Média: $mediaf") . PHP_EOL;
	echo PHP_EOL;

/*

5) Faça um programa que leia as três notas de um aluno em uma matéria e mostre na tela a sua média na disciplina.
Ex:
Nota 1: 4.5
Nota 2: 8.5
A média entre 4.5 e 8.5 é igual a 6.5

*/