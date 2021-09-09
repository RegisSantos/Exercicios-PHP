<?php
	
	$n = 30;

	echo PHP_EOL;

	while ($n >= 1) {

		if ($n%4 != 0) {
			echo($n . " ");
		} else if ($n%4 == 0) {
			echo("[" . $n . "]" . " ");
			
		}

		$n--;

	}

	echo PHP_EOL;

/*

43) Desenvolva um algoritmo que mostre uma contagem regressiva de 30 até 1, marcando os números que forem divisíveis por 4,
exatamente como mostrado abaixo:
30 29 [28] 27 26 25 [24] 23 22 21 [20] 19 18 17 [16]...

*/