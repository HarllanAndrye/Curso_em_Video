<?php

	/**
		> CREATE TABLE usuarios (id INT(5) AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(50), senha VARCHAR(20))
	*/

	# Incluir arquivo de conexão
	include "conexao_bd.php";

	# <input> com "image" envia as coordenadas x e y.
	if (isset($_POST['tEntrar_x'],$_POST['tEntrar_y'])) {

		$nome  = $_POST['tNome'];
		$senha = $_POST['tSenha'];

		$query = "SELECT nome FROM usuarios WHERE nome='$nome' AND senha='$senha'";

		$result = mysql_query($query, $conn);

		if ($result) {
			mysql_close($conn);

			$num_rows = mysql_num_rows($result); # Quantidade de linhas
			echo $num_rows;

			if ($num_rows > 0) { // Verificando se há algum resultado da consulta
				echo "<script>alert('Seja bem Vindo!');</script>";
				echo "<script>location.href='../area-usuario.html?nome=$nome'</script>";
			}
			else {
				echo "<script>alert('Você não está cadastrado na nossa base de dados. Cadastre-se!');</script>";
				echo "<script>location.href='../cadastro.html'</script>";
			}
		}
		else {
			mysql_close($conn);
			echo "<script>alert('ERRO: Não foi possível acessar nossa base de dados. Tente mais tarde.');</script>";
			echo "<script>location.href='../index.html'</script>";
		}
	}
	else if (isset($_POST['tCadastrar_x'],$_POST['tCadastrar_y'])) {
		$nome     = $_POST['tNome'];
		$senha 	  = $_POST['tSenha'];
		$confirma = $_POST['tConfirmar'];

		if ($senha != $confirma) {
			mysql_close($conn);
			echo "<script>alert('ATENÇÃO: Senha diferente do campo -Confirmar senha-!');</script>";
			echo "<script>location.href='../cadastro.html'</script>";
		}
		else {
			$query = "INSERT INTO usuarios (nome, senha) VALUES ('$nome','$senha')";

			$result = mysql_query($query, $conn);

			if ($result) {
				mysql_close($conn);
				echo "<script>alert('Cadastrado com sucesso. Bem vindo!');</script>";
				echo "<script>location.href='../area-usuario.html?nome=$nome'</script>";
			}
			else {
				mysql_close($conn);
				echo "<script>alert('ERRO: Não foi possível acessar nossa base de dados. Tente mais tarde.');</script>";
				echo "<script>location.href='../index.html'</script>";
			}
		}
	}

?>