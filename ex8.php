<?php
	
	$dist = readline("Digite uma determinada distância (em metros): ");

	$km = ($dist / 1000);
	$hm = ($dist / 100);
	$dam = ($dist / 10);
	$dm = ($dist * 10);
	$cm = ($dist * 100);
	$mm = ($dist * 1000);

	echo PHP_EOL;
	echo("A distância de ") . $dist . ("m corresponde a: ") . PHP_EOL;
	echo PHP_EOL;
	echo($km . "Km") . PHP_EOL;
	echo($hm . "Hm") . PHP_EOL;
	echo($dam . "Dam") . PHP_EOL;
	echo($dist . "m") . PHP_EOL;
	echo($dm . "dm") . PHP_EOL;
	echo($cm . "cm") . PHP_EOL;
	echo($mm . "mm") . PHP_EOL;

/*

8) Desenvolva um programa que leia uma distância em metros e mostre os valores relativos em outras medidas.
Ex:
Digite uma distância em metros: 185.72
A distância de 85.7m corresponde a:
0.18572Km
1.8572Hm
18.572Dam
185.72m
1857.2dm
18572.0cm
185720.0mm

*/