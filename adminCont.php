
<!DOCTYPE html>

<html lang="ro">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="stilSite.css">
		<title> RUBIX | Contul meu </title>
	</head>

<body>
	
	<header>
		<?php
			$page='user';
			include "Meniu.php";
		?>
	</header>
	<div class = "container">
	

	<br><br><br><br><br><br><br><br>
	
<?php
	include "connection.php";
		$id=$_GET['id'];
			$sql = "SELECT * FROM Useri WHERE ID = '$id'";
			$rez = mysql_query($sql);
			$row = mysql_fetch_array($rez);
	?>
	
	<div class = "formulare">	
		<div class="reg_form">
			<p> Doresti sa schimbi parola?</p>
            <form action="schimbaParola.php" method="post">
                <p class="labels">
                    <input type="password" name="change" class="register" placeholder="Enter new password" required="required"/>
					<input type="password" name="change1" class="register" placeholder="Re-enter new password" required="required"/>
					<input class = "register" type = "hidden" name = "idu" value = " <?php echo $id ?>" />
                </p>
				 <input type="submit" name="chg_pass" class="button" value="Schimba parola" />
				 
			</form>
			
			
			
		</div>
	</div>
	</div>
		
	
	
</body>
</html>