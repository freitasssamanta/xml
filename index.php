<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Notícias Planeta Bizarro</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" >
	</head>
	<body>
		<h1>Notícias Planeta Bizarro</h1>
		
		<div class="center">
			<?php
				
				$link = "https://g1.globo.com/rss/g1/planeta-bizarro"; //link do arquivo xml
				$xml = simplexml_load_file($link) -> channel; //carrega o arquivo XML e retornando um Array
		 
				foreach($xml -> item as $item){ //faz o loop nas tag com o nome "item"
				//exibe o valor das tags que estão dentro da tag "item"
				//utilizamos a função "utf8_decode" para exibir os caracteres corretamente
				echo "<h2>".$item -> title."</h2>";
				echo "<h5>".$item -> pubDate."</h5>";
				echo "<p>".$item -> description."<a href='".$item -> link."'>Continue lendo...</a></p>";
				echo "<strong>_________________________________________________________________________________________</strong><br />";
				} //fim do foreach
			?>
		</div>
	</body>
	<footer>
		<h6>Desenvolvido por Samanta de Freitas Silva - 2020</h6>
	</footer>
</html>