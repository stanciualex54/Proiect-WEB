
<!DOCTYPE html>

<html lang="ro">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="stilSite.css">
		<title> RUBIX | Home </title>
	</head>

<body>
	
	<header>
		<?php
			$page='home';
			include "Meniu.php";
		?>
	</header>
	<div class = "container">
		<h2> Bine ai venit! </h2><br>
		
		<div class = "linie">
			<div class = "produsStanga">
				
				<a href="Standard.php">
				<img src = "trei.jpg" alt = "trei" class = "imagine"></a>
				<p class = "text">Standard</p>
					
			</div>
			<div class = "produsStanga">
				
				<a href="Special.php">
				<img src = "pira.jpg" alt = "pira" class = "imagine"></a>
				<p class = "text">Special</p>
				
			
			
			</div>
			<div class = "produsStanga">
				
				<a href="Accesorii.php">
				<img src = "mat.jpg" alt = "mat" class = "imagine">
				</a>
				<p class = "text">Accesorii</p>
				
			
			
			</div>
	
		</div>
	
	</div>
	<div class = "footer"><a href="cv.htm"> &copy; SA2020 </a></div>
		
	
	
</body>
</html>