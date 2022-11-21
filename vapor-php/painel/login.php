<?php
require('./modulos/conexao.php');


$verificaemail = $_POST['email'] ?? null;
$verificasenha = $_POST['senha'] ?? null; 


$query_emailsenha = " SELECT nome, id, cpf FROM administrador WHERE email = '{$verificaemail}' AND senha = '{$verificasenha}'";
$adiministrador = mysqli_fetch_Assoc(mysqli_query($conn, $query_emailsenha));

if($adiministrador == null){
    header('location: index.php?error=usuario e/ou senha inválidos');
} else {
    session_start();
    $_SESSION['adiministrador'] = $adiministrador;
    header('location: dashboard.php');
}




?>