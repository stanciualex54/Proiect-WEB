<div class = "container">
			
			<div>
					<img src = "rubix1.png" alt = "logo" class = "logo" >
			</div>
			
			<nav>
				<ul>
	
	<?php
	session_start();
	
	if(!isset($_SESSION[id])){
		
		
		echo "<li><a class=\"";?><?php if($page=='home'){echo "active";} ?><?php echo "\" href = \"Home.php\" >Home</a></li>";
		echo "<li><a class=\"";?><?php if($page=='contulmeu'){echo "active";} ?><?php echo "\" href = \"ContulMeu.php\" >Inregistrare</a></li>";
	}
	else if($_SESSION['id']){
		if($_SESSION['parola']== md5("parolando")){
			echo "<li><a class=\"";?><?php if($page=='home'){echo "active";} ?><?php echo "\" href = \"Home1.php\" >Home</a></li>";
			echo"<li class = \"dropdown\"><a>Categorii</a>
						<ul class = \"dropdown-content\">
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='standard'){echo 'active';} ?> <?php echo "\" href = \"Standard.php\">Standard</a></li>
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='special'){echo 'active';} ?> <?php echo "\" href = \"Special.php\">Special</a></li>
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='acc'){echo 'active';} ?> <?php echo "\" href = \"Accesorii.php\">Accesorii</a></li>
						</ul>
			</li>";
			echo "<li><a class=\"";?> <?php if($page=='manage'){echo 'active';} ?> <?php echo "\" href = \"afisAdmin.php\" >Manage</a></li>";
			echo "<li id=\"logright\"> <a  href=\"logout.php\">Logout</a></li>";
		}
		else{
			echo "<li><a class=\"";?><?php if($page=='home'){echo "active";} ?><?php echo "\" href = \"Home1.php\" >Home</a></li>";
			echo"<li class = \"dropdown\"><a>Categorii</a>
						<ul class = \"dropdown-content\">
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='standard'){echo 'active';} ?> <?php echo "\" href = \"Standard.php\">Standard</a></li>
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='special'){echo 'active';} ?> <?php echo "\" href = \"Special.php\">Special</a></li>
							<li class = \"spatiu\"><a class = \"";?> <?php if($page=='acc'){echo 'active';} ?> <?php echo "\" href = \"Accesorii.php\">Accesorii</a></li>
						</ul>
			</li>";
			echo "<li><a class=\"";?> <?php if($page=='user'){echo "active";} ?><?php echo "\" href = \"adminCont.php\" >Contul meu</a></li>";
			echo "<li id=\"logright\"> <a  href=\"logout.php\">Logout</a></li>";
		}
	}
	?>
			</ul>
				
			</nav>
	</div>


