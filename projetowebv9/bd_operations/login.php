<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['password'])){
    header('Location: ../paginalogin.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT * FROM users where email = '{$email}' and password = '{$password}';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row==1){
    $_SESSION['email'] = $email;
    header('Location: ../paginaAposEntrada.php');
    exit();

}
else {
    $_SESSION['no_login'] = true;
    header('Location: ../paginaLogin.php');
    exit();
}

?>