<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabelas</title>
	</head>
	<body>
		<form action="tabela.php" method="GET">
			Linha <input type="number" name="linha">
			Coluna <input type="number" name="coluna">
			Texto <input type="text" name="texto">
			<button type="submit">Enviar</button>
		</form>
		<table border="1">
		<?php
			for ($row=1; $row <= $_REQUEST["linha"]; $row++) { 
				print "<tr>";
				for($col=1; $col <= $_REQUEST["coluna"] ; $col++) { 
					print "<td>";
					print $_REQUEST["texto"];
					print "</td>";
				}
				print "</tr>";
			}
		?>
		</table>
	</body>
</html>