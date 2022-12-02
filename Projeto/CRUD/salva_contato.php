
<?php
	include('funcoes.php');
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$escore = '0';
	$multiscore = '0';


	
	inserirContato($nome, $senha, $escore, $multiscore);

	header('location:../index.php');

	
	
?>