<?php
include ('bd_operations/verificacao_login.php');
include ('bd_operations/tabela.php');
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
              <li><a href="#" class="active">Tabela</a></li>
              <li><a href="#" >Desafios</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="bd_operations/logout.php">Sair</a></li>
            </ul>
          </nav>
          <form action="POST">
          <div class="leaderboard">
              <header>
              <h2>Tabela de Líderes</h2>
              <h4>Top 10</h4>
              <img class="img" src="media/leaderboard.png" >

              </header>
              <table>
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Pontos</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              while ($row= mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td class="nick"> <?php echo $row['username'] ?> </td>
              <td class="pontos"> <?php echo $row['pontos'] ?> </td>
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