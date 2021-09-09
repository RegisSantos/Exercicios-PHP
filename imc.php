<?php

$altura = 1.74;
$peso = 84;
$pesoIdealMin = 18.5;
$pesoIdealMax = 24.6;
$imc = $peso / ($altura ** 2);

echo "O IMC calculado é de: " . $imc . "kg/cm²" . PHP_EOL;

if($imc < $pesoIdealMin) {
	echo "Seu IMC está abaixo do recomendado!" . PHP_EOL;
	}//fim if

	else if($imc >= $pesoIdealMin && $imc <= $pesoIdealMax) {
		echo "Seu IMC está dentro do recomendado!" . PHP_EOL;
		}//fim else if

		else {
			echo "Seu IMC está acima do recomendado!" . PHP_EOL;
			}//fim else


//desenvolver algoritmo para calcular e mostrar o imc, de acordo com altura e peso informados, informando se os dados estão abaixo, dentro, ou acima do peso recomendados;