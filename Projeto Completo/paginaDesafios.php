<?php

include ('bd_operations/desafios.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/paginaDesafios.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="media/logo.png" >
            <ul>
            <li><a href="paginaPrincipal.html">Inicio</a></li>
            <li><a href="paginaSobre.php" >Sobre</a></li>
            <li><a href="paginaDesafios.php" class="active">Desafios</a></li>

            </ul>
          </nav>
          <form action="POST">
          <div class="desafios">
              <header>
              <h2>Desafios da App</h2>
              <h4></h4>
              

              </header>
              <table>
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              while ($row= mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td > <?php echo $row['id'] ?> </td>
              <td > <?php echo $row['nome'] ?> </td>
              </tr>
            
            <?php
              }
            ?>
            </tbody>
            </table>

          </div>
       
       
        </form>
    </div>
</body>
</html>