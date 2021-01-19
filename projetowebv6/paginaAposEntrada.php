<?php
include ('bd_operations/verificacao_login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/paginaAposEntrada.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="media/logo.png" >
            <ul>
              <li><a href="#" class="active">Inicio</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="bd_operations/logout.php">Sair</a></li>
            </ul>
          </nav>
          <form action="POST">
          <div class="center">
              <h2>Tabela de Líderes</h2>
              <p>
              <a>Utilizador 1</a>
              <a>20 Pontos</a>
            </p>
            <p>
                <a>Utilizador 3</a>
                <a>10 Pontos</a>
              </p>
              <p>
                <a>Utilizador 2</a>
                <a>5 Pontos</a>
              </p>

          </div>
          <div class="center2">
            <h2>Os seus Desafios</h2>
            <p>
            <a>Utilizador 1</a>
            <a>20 Pontos</a>
          </p>
          <p>
              <a>Utilizador 3</a>
              <a>10 Pontos</a>
            </p>
            <p>
              <a>Utilizador 2</a>
              <a>5 Pontos</a>
            </p>

        </div>
        </form>
    </div>
</body>
</html>