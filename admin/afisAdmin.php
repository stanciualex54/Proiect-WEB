<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Data base</title>


<link href="stilSite.css" rel="stylesheet" type="text/css">
</head>

<body>
<header> 
	<?php
	include "Meniu.php";
	?>
</header>
 

	<?php
		include "connection.php";
		$sql="SELECT * FROM Standard";
		$rez=mysql_query ($sql);
	?>
	
	<div class = "container">
	<div class = "text1">
		<table>
		<tr>Standard <br> </tr>
		<tr>
			<th>ID</th>
			<th>Tip</th>
			<th>Cantitate</th>
			<th>Pret</th>
		</tr>
			<?php
				$i=1;
				while($row=mysql_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td><td>".$row['Tip1']."</td>
						<td>".$row['Cantitate1']."</td>
						<td>".$row['Pret']."</td>
						<td> <a href =\"formularModif.php?id=".$row['ID']."\">modifica</a></td></tr>";
					$i++;
				}
			?>	
		</table>
		
		<?php
		include "connection.php";
		$sql="SELECT * FROM Special";
		$rez=mysql_query ($sql);
		?>
		<table>
		<tr>
			Special
		</tr>
		<tr>
			<th>ID</th>
			<th>Tip</th>
			<th>Cantitate</th>
			<th>Pret</th>
		</tr>
			<?php
				$i=1;
				while($row=mysql_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td><td>".$row['Tip']."</td>
						<td>".$row['Cantitate']."</td><td>".$row['Pret']."</td>
						<td> <a href =\"formularModif.php?id=".$row['ID']."\">modifica</a></td></tr>";
					$i++;
				}
			?>	
		</table>
		
		<?php
		include "connection.php";
		$sql="SELECT * FROM Accesorii";
		$rez=mysql_query ($sql);
		?>
		<table>
		<tr>
			Accesorii
		</tr>
		<tr>
			<th>ID</th>
			<th>Tip</th>
			<th>Cantitate</th>
			<th>Pret</th>
		</tr>
			<?php
				$i=1;
				while($row=mysql_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td><td>".$row['Tip']."</td>
						<td>".$row['Cantitate']."</td>
						<td>".$row['Pret']."</td>
						<td> <a href =\"formularModif.php?id=".$row['ID']."\">modifica</a></td></tr>";
					$i++;
				}
			?>	
		</table>
		
		<?php
		include "connection.php";
		$sql="SELECT * FROM Useri";
		$rez=mysql_query ($sql);
		?>
		<table>
		<tr>Useri</tr>
		<tr>
			<th>ID</th>
			<th>Nume</th>
			<th>Prenume</th>
			<th>Username</th>
			<th>E-Mail</th>
		</tr>
			<?php
				$i=1;
				while($row=mysql_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td><td>".$row['Nume']."</td>
						<td>".$row['Prenume']."</td>
						<td>".$row['Username']."</td>
						<td>".$row['Email']."</td>
						<td> <a href =\"deleteUseri.php?id=".$row['ID']."\">sterge</a></td></tr>";
					$i++;
				}
			?>	
		</table>
		
		
		</div>
	</div>



</body></html>