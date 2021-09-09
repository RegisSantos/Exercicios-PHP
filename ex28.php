<?php

	$larg = readline("Informe a largura do terreno (em m): ");
	$comp = readline("Informe o comprimento do terreno (em m): ");

	$cal = ($larg * $comp);
	$area = number_format($cal, 2, '.', '');

	if ($area < 100) {
		echo PHP_EOL . ("Área Total: " . $area . "m²") . PHP_EOL;
		echo("TERRENO POPULAR") . PHP_EOL;
	} else if ($area >= 100 && $area <= 500) {
		echo PHP_EOL . ("Área Total: " . $area . "m²") . PHP_EOL;
		echo("TERRENO MASTER!") . PHP_EOL;
	} else {
		echo PHP_EOL . ("Área Total: " . $area . "m²") . PHP_EOL;
		echo("TERRENO VIP") . PHP_EOL;
	}



/*

28) Faça um programa que leia a largura e o comprimento de um terreno retangular, calculando e mostrando a sua área em m².
O programa também devemostrar a classificação desse terreno, de acordo com a lista abaixo:
- Abaixo de 100m² = TERRENO POPULAR
- Entre 100m² e 500m² = TERRENO MASTER
- Acima de 500m² = TERRENO VIP

*/