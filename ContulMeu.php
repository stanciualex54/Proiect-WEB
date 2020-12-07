<!DOCTYPE html>

<html lang="ro">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="stilSite.css">
		<title>RUBIX | Inregistrare </title>
	</head>

<body>
	
	<header>
		<?php
			$page='contulmeu';
			include "Meniu.php";
		?>
	</header>
	
	
	<div class = "container">
		<br><br><br><br><br><br><br><br>
	<div class = "formulare">	
		<div class="reg_form">
			<p> Ai deja un cont? Conecteaza-te.</p>
            <form action="check.php" method="post">
                <p class="labels">
                    <input type="text" name="reg_username" class="register" placeholder="Enter username" required="required"/>
                </p>
				
				 <p class="labels">
                    <input type="password" name="reg_password" class="register" placeholder="Type your password" required="required"/>
                </p>
				 <input type="submit" name="log_btn" class="button" value="Log in" />
				 
			</form>
			
		</div>
		
		<div class="reg_form">
		<p> Nu ai un cont? Inregistreaza-te acum.</p>
            <form action="insereazaUser.php" method="post">
                <p class="labels">
                    <input type="text" name="reg_name" class="register" placeholder="Enter last name" required="required" />
                </p>               
                <p class="labels">
                    <input type="text" name="reg_prenume" class="register" placeholder="Enter first name" required="required"/>
                </p>				
				<p class="labels">
                    <input type="text" name="reg_username" class="register" placeholder="Enter username" required="required"/>
                </p>               
                <p class="labels">
                    <input type="password" name="reg_password" class="register" placeholder="Type your password" required="required"/>
                </p>  
                <p class="labels">
                    <input type="text" name="reg_email" class="register" placeholder="Enter your E-mail" required="required"/>
                </p>                
                <input type="submit" name="reg_btn" class="button" value="Register" />				
            </form>		
        </div>
	</div>	
	</div>
	
	
</body>
</html>