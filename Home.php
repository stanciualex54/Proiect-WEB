
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
		<h2 class  = "text"> Bine ai venit! </h2><br>
		<p class = "text">Iti multumim ca ai ales sa ne vizitezi!</p>
		<p class = "text">Te rugam sa iti faci un cont pentru a accesa produsele noastre.</p>
		<form method="post" action="ContulMeu.php">
			<button class = "button1" type="submit">Inregistrare</button>
		</form>

	</div>
	<div class = "footer"><a href="cv.htm"> &copy; SA2020     </a>
		<a href="http://csac.ulbsibiu.ro/"> CSAC </a></div>
	
	
		
	
	
</body>
</html>