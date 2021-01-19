<?php

    $hostname = "localhost";
    $databasename = "projetopw";
    $username = "pwadmin";
    $password = "1234";

    try {
    $conexao = mysqli_connect($hostname, $username, $password, $databasename);
    }
    catch (\PDOException $e){
        echo $e->getMessage();
    }
    
    

?>