<?php

	echo PHP_EOL;
	$altura = readline("Informe sua altura: ");
	$peso = readline("Informe seu peso: ");

	$cal = ($peso / ($altura * $altura));
	$imc = number_format($cal, 2, '.', '');

	echo PHP_EOL;
	echo("Seu IMC é de: " . $imc) . PHP_EOL;

	if ($imc < 18.5) {
		echo("Cuidado! Você está ABAIXO do peso ideal.") . PHP_EOL;
	} else if ($imc >= 18.5 && $imc < 25) {
		echo("Parabéns! Você está no seu peso ideal.") . PHP_EOL;
	} else if ($imc >=25 && $imc < 30) {
		echo("Você está com sobrepeso.") . PHP_EOL;
		echo("Pratique exercícios físicos.") . PHP_EOL;
	} else if ($imc >= 30 && $imc < 40) {
		echo("Cuidado! Você está com obesidade") . PHP_EOL;
		echo("Consulte seu médico e pratique exercícios físicos!") . PHP_EOL;
	} else if ($imc >= 40) {
		echo("Cuidado! Você está com obesidade mórbida") . PHP_EOL;
		echo("Consulte seu médico!") . PHP_EOL;
	}

/*

34) O Índice de Massa Corpórea (IMC) é um valor calculado baseado na altura e no peso de uma pessoa.
De acordo com o valor do IMC, podemos classificar o indivíduo dentro de certas faixas.

- abaixo de 18.5: Abaixo do peso
- entre 18.5 e 25: Peso ideal
- entre 25 e 30: Sobrepeso
- entre 30 e 40: Obesidade
- acima de 40: Obseidade mórbida

Obs: O IMC é calculado pela expressão peso/altura² (peso dividido pelo quadrado da altura)
Desenvolva um algoritmo para calcular e classificar p IMC de uma pessoa:

*/