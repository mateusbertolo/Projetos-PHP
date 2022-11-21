<?php 
    require('./modulos/conexao.php');
    require('./modulos/autenticacao.php');
   
    $nome_categoria = ucfirst(strtoupper($_POST['categoria'])) ?? null;
    $id_categoria = $_POST['id'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE nome = '{$id_categoria}' AND id != '{$id_categoria}'";
    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
    $atualizar_categoria = "UPDATE categoria SET nome = '{$nome_categoria}' WHERE id = '{$id_categoria}'";



        if($categoria == null) {
            mysqli_query($conn, $atualizar_categoria);
            header("location: categoria.php");
        } else {
            header("location: editar-categoria.php?error=Esta categoria já está cadastrada&id={$id_categoria}");
        }
        
        
        
        ?>


