
<?php
	function conectar(){
        /*conecta-se ao $banco que está em um $servidor apartir de um $usuario com a $senha */
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'agenda';
		$con = new mysqli($servidor, $usuario, $senha, $banco);
		return $con;
	}
	function listarContato(){ //READ
		$con = conectar();
		$sql = "SELECT * FROM contato"; //seleciona toda a tabela
		$resultado = $con->query($sql); //roda o código $sql no $banco
		$lista = array(); //cria uma array
		while($dados = $resultado->fetch_array()){ //retorna as linhas do bd
			$lista[] = $dados;
		}
		return $lista;
		mysqli_close($con); //fecha o bd
	}

	function inserirContato($nome, $senha, $escore, $multiscore){ //CREATE
		$con = conectar();
		$sql = "INSERT INTO contato (nome, senha, escore, multiscore) VALUES ('$nome','$senha','$escore','$multiscore')"; //insere $nome e $senha em nome, eamil
		$con->query($sql);	// roda o código $sql
		mysqli_close($con);
	}
	
	function buscarContato($id){
		$con = conectar();
		$sql = "SELECT * FROM contato WHERE id = '$id'";
		$resultado = $con->query($sql); // roda o código $sql e guarda em $resultado
		$contato = $resultado->fetch_array(); //retorna a linha $resultado
		mysqli_close($con);
		return $contato; //retorna o valor $contato
	}
	
	function atualizarContato($id, $nome, $senha){ //UPDATE
		$con = conectar();
		$sql = "UPDATE contato SET nome='$nome', senha='$senha' WHERE id='$id';"; //atualiza o nome e senha do contato $id 
		$con->query($sql);
		mysqli_close($con);
	}
	
	function excluirContato($id){  //DELETE
		$con = conectar();
		$sql = "DELETE FROM contato WHERE id='$id'"; //deleta WHERE id = o id
		$con->query($sql);
		mysqli_close($con);
	}

	
?>