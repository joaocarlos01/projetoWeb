<?php
session_start();
if(!$_SESSION['email']) {
    header('Location: paginaLogin.php');
    exit();
}

?>