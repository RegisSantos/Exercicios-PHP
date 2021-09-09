<?php

$altura = 1.74;
$peso = 84;
$pesoIdealMin = 18.5;
$pesoIdealMax = 24.6;

$imc = $peso/($altura**2);

echo "O IMC calculado é de: " . $imc . PHP_EOL;

if($imc < $pesoIdealMin) {
	echo "O IMC está ABAIXO do nível recomendado." . PHP_EOL;
	}//fim if

	else if($imc >= $pesoIdealMin && $imc <= $pesoIdealMax) {
		echo "O IMC está dentro dos liníveis recomendados." . PHP_EOL;
		}//fim else if
		
		else {
			echo "O IMC calculado está ACIMA no nível recomendado." . PHP_EOL;
		}//fim else

//desenvolver algoritmo para calcular e mostrar o imc, de acordo com altura e peso informados, informando se os dados estão abaixo, dentro, ou acima do peso recomendados;