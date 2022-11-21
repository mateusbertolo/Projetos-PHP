<?php
    require('./modulos/conexao.php');
    
    $id_idioma = $_GET['id'] ?? null;

    $query_jogoidioma = "DELETE FROM jogo_idioma WHERE id_idioma = {$id_idioma}";
    $query_idioma = "DELETE FROM idioma WHERE id = {$id_idioma}";

    mysqli_query($conn, $query_jogoidioma);
    mysqli_query($conn, $query_idioma);

    header("location: idiomas.php");
?>