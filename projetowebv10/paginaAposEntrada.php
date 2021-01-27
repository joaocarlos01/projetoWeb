<?php
include ('bd_operations/verificacao_login.php');
include ('bd_operations/desafiosUser.php');
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
              <li><a href="#" class="active">Desafios</a></li>
              <li><a href="paginaTabela.php" >Tabela</a></li>
              <li><a href="paginaComentario.php" >Avaliação</a></li>
             <li><a href="bd_operations/logout.php">Sair</a></li>
            </ul>
          </nav>
          <form action="POST">
          <div class="desafios" >
              <header>
              <h2> Os Seus Desafios</h2>
              
              
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
             while($row =mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td> <?php echo $row['id'] ?> </td>
              <td> <?php echo $row['nome'] ?> </td>
              
              
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