<?php


require_once 'funcoes(banco).php';
require_once 'contas(banco).php';

titularLM($contasCorrentes['123.456.789-10']);
titularLM($contasCorrentes['123.456.789-11']);
titularLM($contasCorrentes['123.456.789-12']);
titularLM($contasCorrentes['123.456.789-13']);

unset ($contasCorrentes['123.456.789-12']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h1>Contas Correntes</h1>
	<dl>
		<?php foreach($contasCorrentes as $cpf => $conta) { ?>
		<dt>
			<h3><?= $conta['titular']; ?> - <?php echo $cpf ?> </h3>
		</dt>
		<dd>
			Saldo: <?= $conta['saldo']; ?>
		</dd>
		<?php } ?>
	</dl>
</body>
</html>

<?php




/*
EM PHP
echo "<ul>";

	foreach($contasCorrentes as $cpf => $conta) {
		exibeConta($conta);
	}//fim foreach

echo "</ul>";
*/


//também pode ser escrito dessa forma, especificando a list:
//list('titular' => $titular, 'saldo' => $saldo) = $conta;

/*
exibeMensagem("CPF: " . "$cpf " . "- " . "Titular: " . " $titular " . "- " . "Saldo: " . " $saldo");
*/
?>
