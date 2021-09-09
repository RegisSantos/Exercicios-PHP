<?php
	
	echo PHP_EOL;
	$quant = readline("Informe a quantidade de cigarros fumados por dia: ");
	$anos = readline("Informe por quantos anos você fumou: ");

	$cal1 = ($quant * 10) * $anos;
	$cal2 = ($anos * 360);

	echo PHP_EOL . ("Você perdeu " . $cal1 . " minutos de vida!") . PHP_EOL;
	//incompleto

/*

16) [DESAFIO] Escreva um programa para calcular a redução do tempo de vida de um fumante.
Pergunte a quantidade de cigarros fumados por dia e quantos anos ele já fumou.
Considere que um fumante perde 10 min de vida a cada cigarro.
Calcule quantos dias de vida um fumante perderá e exiba o total em dias.

*/