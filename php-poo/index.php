<!DOCTYPE html>
<html>
<head>
	<title>PHP-POO - Curso em Video</title>
</head>
<body>
	<pre>
	<?php 
		require_once "Gafanhoto.php";
		require_once "Video.php";
		require_once "Visualizacao.php";

		$v[0] = new Video("Aula 1 de POO");
		$v[1] = new Video("Aula 2 de POO");
		$v[2] = new Video("Aula 3 de POO");

		$g[0] = new Gafanhoto("fulano", 18, "M", "fula");
		$g[1] = new Gafanhoto("fulana", 20, "F", "fulaa");
		
		//Agregando o gafanhoto ao video
		$vis[0] = new Visualizacao($g[0], $v[2]);
		$vis[1] = new Visualizacao($g[0], $v[1]);
		
		$vis[0]->avaliar();
		$vis[1]->avaliarPorcentagem(85);
		
		print_r($vis);
		//print_r($v);
		//print_r($g);
	?>
	</pre>
</body>
</html>

