<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$preis = 1.12;
			
			if($preis < 1) {
				echo "Der Preis liegt unter 1 &euro;.<br/>";
				echo "Das ist günstig.";
			} else {
				if($preis <= 1.2) {
					echo "Der Preis liegt zwischen 1 &euro; und 1.20 &euro;<br/>";
					echo "Langsam wird es teuer.";
				}	else {
					echo "Der Preis liegt über 1.20 &euro;<br/>";
					echo "Das ist viel zu teuer!";
				}
			}
		?>
	</body>
</html>