<?php 

include 'bd_operations/conexao.php';

include 'bd_operations/verificacao_login.php';





if (isset($_POST['submit'])) { 
	
	$email = $_SESSION['email'];
    $comment = $_POST['comment'];
    

	$sql = "INSERT INTO comments (email, comment, nome)
			VALUES ('$email', '$comment', 0)";
	$result = mysqli_query($conexao, $sql);
    
    
    
    if ($result) {
		echo "<script>alert('Comentário adicionado.')</script>";
	} else {
		echo "<script>alert('Já comentou')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Comment System in PHP - Pure Coding</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				
				
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conexao, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				
				<h4><?php echo $row['email']; ?><h4>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>