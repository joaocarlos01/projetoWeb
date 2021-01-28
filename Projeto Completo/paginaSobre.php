<?php

include ('bd_operations/tabela.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/paginaSobre.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="media/logo.png" >
            <ul>
            <li><a href="paginaPrincipal.html">Inicio</a></li>
            <li><a href="paginaSobre.php"  class="active">Sobre</a></li>
            <li><a href="paginaDesafios.php">Desafios</a></li>
            </ul>
          </nav>
          <form action="POST">

          <br><br><br><br>
          

          <div class="info">
       
            <h6>Enquadramento</h6><br>
          <p>Este projeto foi desenvolvido no âmbito da disciplina de Programação WEB.</p><br>
          <h6>Objetivo</h6><br>
          <p>Complemnto para o trabalho de Programação de Dispositivos Móveis e Integração de Sistemas.</p><br>
          <h6>Objetivo da App</h6><br>
          <p>Desenvolver uma app para Android, que consiga identificar objetos numa determinada imagem.</p><br>
          <p>Foi ainda implementado um sistema de pontos, obtidos por cumprir determinados objetivos.</p><br>
          <h6>Tecnologias Usadas</h6><br>
          <ul>
          <li>Android Studio;</li><br>
          <li>Node.Js;</li><br>
          <li>MySQL;</li><br>
          <li>HTML</li><br>
          <li>CSS</li><br>
          <li>PHP</li><br>

         </ul>
          <h6>Funcionalidades</h6><br>
          <ul>
          <li>Registo de Utilizador no Site;</li><br>
          <li>Registo de utilizador na app;</li><br>
          <li>Sistema de Login;</li><br>
          <li>Consulta dos objetivos da aplicação;</li><br>
          <li>Consulta dos objetivos por completar;</li><br>
          <li>Consulta da tabela de líderes da Aplicação</li><br>
          <li>Consulta dos pontos do Utilizador</li><br>
          <li>Possibilidade de deixar um comentário sobre o site e a app;</li><br>
          </ul>


          </div>
         
       
        </form>
    </div>
</body>
</html>