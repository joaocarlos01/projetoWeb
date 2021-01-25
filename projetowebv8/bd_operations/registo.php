<?php
session_start();
include('conexao.php');

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$utilizador = mysqli_real_escape_string($conexao, trim($_POST['user']));
$password = mysqli_real_escape_string($conexao, trim($_POST['password']));
$passwordConfirmar = $_POST['passwordConfirmar'];

$sql = "SELECT COUNT(*) as total from users where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row ['total'] == 1){
    $_SESSION['email_existe'] = true;
    header('Location:../paginaSignup.php');
    exit();
}

if($password != $passwordConfirmar){
    $_SESSION['registo_password'] = true;  
    header('Location:../paginaSignup.php');
    exit();
}

$sql = "INSERT INTO users (username, email, password, pontos) VALUES ('$utilizador', '$email', '$password', '0')";


if($conexao->query($sql) === TRUE){
    $_SESSION['registo_status'] = true;
}

$conexao->close();

header('Location:../paginaSignup.php');
exit();

?>