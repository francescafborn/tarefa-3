<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>FORMULARIO</title>
	</head>

	<body>
		<h1> dados recebidos </h1>

		<?php
			if(isset($_POST["nome"]) == true){
			$nome = $_POST["nome"];
			echo ("o nome da pessoa é: ".$nome. "<br>");
			}

			if(isset($_POST["sexo"]) == true){
			$sexo = $_POST["sexo"];
			echo ("o sexo é: ".$sexo. "<br>");
			}

			if(isset($_POST["olho"]) == true){
				$olho = $_POST["olho"];
				echo ("a cor do olho é: ".$olho. "<br>");
			}

			if(isset($_POST["check"]) == true){
				$vetorcheck = $_POST["check"];
				echo ("a pessoa escolheu: ".count($vetorcheck)." opções". "<br>");
				foreach ($vetorcheck as $check){
					echo (" ".$check."<br>");
				}
			}

			if(isset($_POST["texto"]) == true){
				$texto = $_POST["texto"];
				echo ("habilidade atletica: ".$texto. "<br>");
			}
		?>

	</body>
</html>
