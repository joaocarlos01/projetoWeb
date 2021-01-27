<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registar</title>
	<link rel="stylesheet" href="./css/paginaregister.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
</head>
<body>
	<div class="center">
		<h1>Registar</h1>
		<form action="bd_operations/registo.php" method="POST" >
            <div class="txt_field">
				<input type="text" name ="email" required>
				<span></span>
                <label >Email</label>
            </div>
			<div class="txt_field">
				<input type="text"  name ="user" required>
				<span></span>
				<label >Nome de Utilizador</label>
			</div>
			<div class="txt_field">
				<input type="password" name ="password" required>
				<span></span>
				<label >Password</label>
			</div>
			
			<div class="txt_field">
				<input type="password" name ="passwordConfirmar" required>
				<span></span>
				<label >Confirmar Password</label>
			</div>
			<?php
			if(isset($_SESSION['registo_password'])):
			?>
			<div class="erro">Password não corresponde.</div>
			<?php
			endif;
			unset($_SESSION['registo_password']);
			?>
			
			<?php
			if(isset($_SESSION['email_existe'])):
			?>
			<div class="erro">Email já registado.</div>
			<?php
			endif;
			unset($_SESSION['email_existe']);
			?>
			
			<?php
			if(isset($_SESSION['registo_status'])):
			?>
			<div class="sucesso">Login Efetuado com Sucesso! <a href="paginaLogin.php"> Entrar </a></div>
			<?php
			endif;
			unset($_SESSION['registo_status']);
			?>

			
			<input type="submit" value="Login">
			<div class="signup_link">
				Já é membro? <a href="paginaLogin.php">Entrar</a>
				
			</div>
		</form>
	</div>
	
</body>
</html>