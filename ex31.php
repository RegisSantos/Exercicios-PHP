<?php

	echo("Vamos jogar Jo-Ken-Po!") . PHP_EOL;
	$j1 = readline("Jogador 1, escolha sua jogada (1 - Pedra / 2 - Papel / 3 - Tesoura): ");
	$j2 = readline("Jogador 2, escolha sua jogada (1 - Pedra / 2 - Papel / 3 - Tesoura): ");

	if ($j1 == 1 && $j2 == 1) {
		echo PHP_EOL;
		echo("Os dois jogadores escolheram PEDRA!") . PHP_EOL;
		echo("EMPATE! Tentem novamente!") . PHP_EOL;
	} else if ($j1 == 2 && $j2 == 2) {
		echo PHP_EOL;
		echo("Os dois jogadores escolheram PAPEL!") . PHP_EOL;
		echo("EMPATE! Tentem novamente!") . PHP_EOL;
	} else if ($j1 == 3 && $j2 == 3) {
		echo PHP_EOL;
		echo("Os dois jogadores escolheram TESOURA!") . PHP_EOL;
		echo("EMPATE! Tentem novamente!") . PHP_EOL;
	} else if ($j1 == 1 && $j2 == 2) { /* testes 1*/
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu PEDRA!") . PHP_EOL;
		echo("JOGADOR 2 escolheu PAPEL!") . PHP_EOL;
		echo("Papel enrola Pedra!") . PHP_EOL;
		echo("JOGADOR 2 GANHOU!") . PHP_EOL;
	} else if ($j1 == 1 && $j2 == 3) {
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu PEDRA!") . PHP_EOL;
		echo("JOGADOR 2 escolheu TESOURA!") . PHP_EOL;
		echo("Pedra quebra tesoura!") . PHP_EOL;
		echo("JOGADOR 1 GANHOU!") . PHP_EOL;
	} else if ($j1 == 2 && $j2 == 1) { /* testes 2*/
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu PAPEL!") . PHP_EOL;
		echo("JOGADOR 2 escolheu PEDRA!") . PHP_EOL;
		echo("Papel enrola Pedra!") . PHP_EOL;
		echo("JOGADOR 1 VENCEU!") . PHP_EOL;
	} else if ($j1 == 2 && $j2 == 3) { /* testes 2*/
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu PAPEL!") . PHP_EOL;
		echo("JOGADOR 2 escolheu TESOURA!") . PHP_EOL;
		echo("Tesoura corta Papel!") . PHP_EOL;
		echo("JOGADOR 2 VENCEU!") . PHP_EOL;
	} else if ($j1 == 3 && $j2 == 1) { /* testes 3*/
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu TESOURA!") . PHP_EOL;
		echo("JOGADOR 2 escolheu PEDRA!") . PHP_EOL;
		echo("Pedra quebra Tesoura!") . PHP_EOL;
		echo("JOGADOR 2 VENCEU!") . PHP_EOL;
	} else if ($j1 == 3 && $j2 == 2) { /* testes 2*/
		echo PHP_EOL;
		echo("JOGADOR 1 escolheu TESOURA!") . PHP_EOL;
		echo("JOGADOR 2 escolheu Papel!") . PHP_EOL;
		echo("Tesoura corta Papel!") . PHP_EOL;
		echo("JOGADOR 1 VENCEU!") . PHP_EOL;
	} else {
		echo PHP_EOL;
		echo("Algum dos Jogadores escolheu um número errado!") . PHP_EOL;
		echo("Tentem novamente com a opções: (1 - Pedra / 2 - Papel / 3 - Tesoura)") . PHP_EOL;
	}

/*

31) [DESAFIO] Crie um jogo de JoKenPo (Pedra-Papel-Tesoura)

*/