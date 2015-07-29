<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$normal = 1.35;
			$super = 1.40;

			if($_POST["s"] == "N") {
				$erg = $_POST["m"] * $normal;
				if($_POST["m"] >= 100) {
					$erg2 = $erg * 2 / 100;
					$erg = $erg - $erg2;
				}	
				echo $_POST["m"] . " Liter Normal kosten $erg &euro;";
			} else {
				$erg = $_POST["m"] * $super;
				if($_POST["m"] >= 100) {
					$erg2 = $erg * 2 / 100;
					$erg = $erg - $erg2;
				}	
				echo $_POST["m"] . " Liter Super kosten $erg &euro;";
			}
		?>
	</body>
</html>