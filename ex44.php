<?php

	$n1 = readline("Digite o primeiro valor: ");
	$n2 = readline("Digite o último valor: ");
	$n3 = readline("Digite o valor do incremento: ");

	while ($n1 <= $n2) {
		echo($n1 . " ");
		$n1 = $n1 + $n3;
	}

	echo PHP_EOL . ("Acabou!") . PHP_EOL;

/*

44) Crie um algoritmo que leia o valor inicial da contagem, o valor final e o incremento, mostrando em seguida todos os valores no intervalo:
Ex: Digite o primeiro Valor: 3
Digite o último Valor: 10
Digite o incremento: 2
Contagem: 3 5 7 9 Acabou!

*/