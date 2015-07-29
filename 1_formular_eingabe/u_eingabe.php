<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			echo "Ihre Adresse lautet: ";
			echo "<p>" . $_POST["vor"] . " " . $_POST["nach"];
			echo "<br>" . $_POST["str"];
			echo "<br>" . $_POST["plz"] . " " . $_POST["ort"];
		?>
	</body>
</html>