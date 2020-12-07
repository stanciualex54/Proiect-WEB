<!DOCTYPE html>

<html lang="ro">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="stilSite.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title> RUBIX | Cosul meu </title>
	</head>

<body>
	
	<header>
		<?php
			$page='cos';
			include "Meniu.php";
		?>
	</header>
	<?php
		include "connection.php";
		$sql="SELECT * FROM Cos";
		$rez=mysql_query ($sql);
	?>
	
	<div class = "container">
	<div class = "text1">
		<table>
		<tr>
			<th>ID</th>
			<th>Produs</th>
			<th>Cantitate</th>
		</tr>
			<?php
				$i=1;
				while($row=mysql_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td><td>".$row['Produs']."</td>
						<td>".$row['Cantitate']."</td>
						<td> <a href =\"stergeProdus.php?id=".$row['ID']."\">Sterge</a></td></tr>";
					$i++;
				}
			?>	
		</table>
	
	
	</div>
	</div>
	
	
</body>
</html>