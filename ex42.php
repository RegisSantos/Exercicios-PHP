<?php

	$n = readline("Informe um número inteiro e positivo qualquer: ");
	$x = 1;

	while ($x <= $n) {
		echo($x . " ");
		$x++;
	}

	echo PHP_EOL . ("Acabou!") . PHP_EOL;

/*

42) Faça um algoritmo que pergunte ao usuário um número inteiro e positivo qualquer e mostre uma contagem até esse valor:
Ex: Digite um valor: 35
Contagem: 1 2 3 4 5 6 7 ... 33 34 35 Acabou!

*/