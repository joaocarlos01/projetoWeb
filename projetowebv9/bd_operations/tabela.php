<?php
include('conexao.php');

$query = "SELECT username, pontos FROM users ORDER BY pontos DESC LIMIT 0, 10 ;";
$result = mysqli_query($conexao, $query);
?>