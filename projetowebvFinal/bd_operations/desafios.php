<?php
include('conexao.php');

$query = "SELECT id, nome FROM objetivos ORDER BY id;";
$result = mysqli_query($conexao, $query);
?>