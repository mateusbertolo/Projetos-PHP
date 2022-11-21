<?php 

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$imagem_url = $_POST['imagem'] ?? null;

$consultar_jogo = "SELECT nome,imagem_url FROM jogo WHERE nome = '{$nome}' and '{$imagem_url}'";
$jogo = mysqli_query($conn, $consultar_jogo);

$price = $_POST['valor'] ?? null;
$video_url = $_POST['video'] ?? null;
$release_date = $_POST['lancamento'] ?? null;
$developer = $_POST['desenvolvedora'] ?? null;
$category = $_POST['categoria'] ?? null;
$description = $_POST['descricao'] ?? null;




$query_novo_jogo_with_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$video_url}', '{$release_date}', '{$developer}', {$category})";

$query_novo_jogo_wihout_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$release_date}', '{$developer}', {$category})";



if($jogo->num_rows == null) {
    if ($video_url == "") {
        mysqli_query($conn, $query_novo_jogo_with_video);
        header('location: jogosdash.php');
    } else {
        mysqli_query($conn, $query_novo_jogo_wihout_video);
        header('location: jogosdash.php');
    }
}
else{
    header('location: novo-jogo.php?error=Este jogo já está cadastrado!!');
}
   




?>