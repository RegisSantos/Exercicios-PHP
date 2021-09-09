<?php

	echo PHP_EOL;

	$n1 = readline("Digite o primeiro valor: ");
	$n2 = readline("Digite o último valor: ");
	$n3 = readline("Digite o valor do incremento: ");

	echo PHP_EOL;

	if ($n1 > $n2) {
		$nx = $n1;
		$n1 = $n2;
		$n2 = $nx;
	} else if ($n1 == $n2) {
		echo("Os dois números são iguais, portanto, operação inválida!") . PHP_EOL;
		echo("Tente novamente!") . PHP_EOL;
	}

	while ($n1 <= $n2) {
		echo($n1 . " ");
		$n1 = $n1 + $n3;
	}

	echo("Acabou!");

	echo PHP_EOL;

/*

45) O programa anterior vai ter um problema quando digitarmos o primeiro valor maior que o último.
Resolva esse problema com um código que funcione em qualquer situação.

*/