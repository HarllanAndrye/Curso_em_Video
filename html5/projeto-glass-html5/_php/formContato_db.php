<?php
	# Arquivo que pega os dados do formulário de contato (fale-conosco.html) em envia para o BD

	# Incluir arquivo de conexão
	include "conexao_bd.php";

	$nome 		= $_POST['tNome'];
	$senha 		= $_POST['tSenha'];
	$email 		= $_POST['tEmail'];
	$sexo 		= $_POST['tSexo'];
	$data_nasc 	= $_POST['tNasc'];
	$rua 		= $_POST['tRua'];
	$numero 	= $_POST['tNum'];
	$estado 	= $_POST['tEst'];
	$cidade 	= $_POST['tCid'];
	$urgencia 	= $_POST['tUrg'];
	$msg 		= $_POST['tMsg'];
	$adquirirGG = isset($_POST['tPed']) ? $_POST['tPed'] : 0;
	$cor 		= $_POST['tCor'];
	$quantidade = $_POST['tQtd'];
	$preco 		= $_POST['tTot'];

	$query = "INSERT INTO pedidos (nome, senha, email, sexo, data_nasc, rua, numero, estado, cidade, urgencia, msg, adquirirGG, cor, quantidade, preco) VALUES ('$nome', '$senha', '$email', '$sexo', $data_nasc, '$rua', $numero, '$estado', '$cidade', '$urgencia', '$msg', '$adquirirGG', '$cor', $quantidade, $preco)";

	#echo $query;

	$result = mysql_query($query, $conn);

	if ($result) {
		mysql_close($conn);
		echo '<script type="text/javascript">alert("Suas informações foram enviadas com sucesso! Obrigado.");</script>';
		echo "<script>location.href='../fale-conosco.html'</script>";
	}
	else {
		mysql_close($conn);
		echo '<script type="text/javascript">alert("ERRO: Suas informações NÂO foram enviadas. Por favor, tente novamente.");</script>';
		echo "<script>location.href='../fale-conosco.html'</script>";
	}

?>
