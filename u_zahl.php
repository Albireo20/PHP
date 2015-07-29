<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			$artikel1 = 22.50;
			$artikel2 = 12.30;
			$artikel3 = 5.20;
			$netto = $artikel1 + $artikel2 + $artikel3;
			$mwst = 1.19;
			$brutto = $netto * $mwst;

			echo "<p>Artikel 1: $artikel1 €</p>";
			echo "<p>Artikel 2: $artikel2 €</p>";
			echo "<p>Artikel 3: $artikel3 €</p>";
			echo "<p></p>";
			echo "<p>Nettopreis: $netto €</p>";
			echo "<p>MwSt: 19%</p>";
			echo "<p>Bruttopreis: $brutto €</p>";
		?>
	</body>
</html>