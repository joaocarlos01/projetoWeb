<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entrar</title>
	<link rel="stylesheet" href="css/paginalogin.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
</head>
<body>
	<div class="center">
		<h1>Entrar</h1>
		<form action="bd_operations/login.php" method="POST">
			<div class="txt_field">
				<input type="text" name="email" required>
				<span></span>
				<label >Email</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password" required>
				<span></span>
				<label >Password</label>
			</div>
			<?php
			if(isset($_SESSION['no_login'])):
			?>
			<div class="erro">Credenciais Erradas</div>
			<?php
			endif;
			unset($_SESSION['no_login']);
			?>

			<div class="pass">Esqueceu-se da password?</div>
			<input type="submit" value="Login">
			<div class="signup_link">
				Não é membro? <a href="paginaSignup.html">Registar</a>
				
			</div>
		</form>
	</div>
	
</body>
</html>