<?php

session_start();

$adiministrador = $_SESSION['adiministrador'] ?? null;

if($adiministrador == null){
    header('location: index.php?error= Faça o Login Primeiro!!!');
}
?>