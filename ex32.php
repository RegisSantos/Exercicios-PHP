<?php

	echo PHP_EOL;
	$chute = readline("Chute um número: ");

	$rand = rand(1, 5);

	if ($chute == $rand) {
		echo PHP_EOL . ("Parabéns! Você acertou!") . PHP_EOL;
	} else {
		echo PHP_EOL . ("Que pena! Você errou!") . PHP_EOL;
		echo("Número sorteado: " . $rand) . PHP_EOL;
		echo("Tente novamente!") . PHP_EOL;
	}

/*

32) [DESAFIO] Crie um jogo onde o computador vai sortear um número entre 1 e 5 o jogador vai tentar descobrir qual foi o valor sorteado.

*/