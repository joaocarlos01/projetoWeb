<?php
include('conexao.php');


$email = $_SESSION['email'];
$query = "SELECT s.id, n.nome FROM users_objetivos s NATURAL JOIN objetivos n WHERE s.id = n.id AND s.email='{$email}' AND s.estado = '0' ORDER BY id;";
$result = mysqli_query($conexao, $query);
?>