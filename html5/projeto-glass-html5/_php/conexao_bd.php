<?php
	/*
		(comandos com root)
		> create database googleGlassProject;
		> GRANT ALL ON googleGlassProject.* TO harllan@localhost IDENTIFIED BY '12345';

		(com o usuário harllan)
		> use googleGlassProject;
		> CREATE TABLE pedidos (id INT(5) AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(50), senha VARCHAR(20), email VARCHAR(50), sexo CHAR(1), data_nasc DATE, rua VARCHAR(50), numero CHAR(10), estado CHAR(2), cidade VARCHAR(20), urgencia CHAR(2), msg VARCHAR(200), adquirirGG CHAR(1), cor VARCHAR(10), quantidade INTEGER, preco DECIMAL(6,2));
		> 
	*/

	#Abre a conexão com o MySQL
	$conn = mysql_connect("localhost", "harllan", "12345");
	#Seleciona o banco de dados
	mysql_select_db("googleGlassProject", $conn);
?>