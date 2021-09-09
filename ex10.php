<?php

	$larg = readline("Informe a largura da parede a ser pintada: ");
	$alt = readline("Informe a altura da parede a ser pintada: ");

	$area = ($larg * $alt);
	$quant = ($area / 2);

	echo PHP_EOL;
	echo("A área da parede a ser pintada é de: ") . $area . ("m²") . PHP_EOL;
	echo("A quantidade de tinta necessária é de : ") . $quant . ("L") . PHP_EOL;
	echo PHP_EOL;

/*

10) Faça um algoritmo que leia a largura e altura de uma parede, calcule e mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
sabendo que cada litro de tinta pinta uma área de 2metros quadrados.

*/