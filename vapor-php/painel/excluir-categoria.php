<?php
    require('./modulos/conexao.php');
    
    $id_categoria = $_GET['id'] ?? null;



    $query_jogo = "SELECT id FROM jogo WHERE id_categoria = {$id_categoria}";
    $resultado_jogo = mysqli_query($conn, $query_jogo);


    if($resultado_jogo->num_rows == 0){
        $query_categoriajogo = "DELETE FROM jogo WHERE id_categoria = {$id_categoria}";
        $query_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}"; 
        mysqli_query($conn, $query_categoriajogo);
        mysqli_query($conn, $query_categoria);
        header("location: categoria.php");    
    }
    else {
      while($jogo = mysqli_fetch_array(
        $resultado_jogo)){

            // $resultado_categoria->num_rows != 0
        $query_jogo_plataforma = "DELETE from jogo_plataforma WHERE id_jogo = {$jogo['id']}";
        $query_jogo_idioma = "DELETE from jogo_idioma WHERE id_jogo = {$jogo['id']}";
        $query_categoriajogo = "DELETE FROM jogo WHERE id_categoria = {$jogo['id']}";
        $query_jogo = "DELETE FROM jogo WHERE id = {$jogo['id']}";
        $query_categoria = "DELETE FROM categoria WHERE id = {$jogo['id']}"; 
        mysqli_query($conn, $query_jogo_plataforma);
        mysqli_query($conn, $query_jogo_idioma);
        mysqli_query($conn, $query_categoriajogo);
        mysqli_query($conn, $query_jogo);
        mysqli_query($conn, $query_categoria);
       
        header("location: categoria.php");

    }
    }
    


    
?>  