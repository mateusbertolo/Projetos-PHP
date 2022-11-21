<?php 
    require('./modulos/autenticacao.php');
    require('./modulos/sidemenudashboard.php'); 
    require('./modulos/menuheaderdashboard.php'); 
    $error = $_GET['error'] ?? null;
    $id_categoria = $_GET['id'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
?>

<div id="content-container">
    <form action="atualizar-categoria.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="idiom">Categoria</label>
                <input value="<?=$categoria['nome']?>" name="categoria" id="idiom" class="row-input" type="text">
                <input value="<?=$id_categoria?>" name="id" type="hidden">
            </div>
        </div>

        <?php if($error != null) { ?>
            <div class="error-message"><?=$error?></div>
        <?php } ?>

        <div class="button">
            <button class="button-salvar" type="submit">Atualizar</button>
        </div>
    </form>
</div>
