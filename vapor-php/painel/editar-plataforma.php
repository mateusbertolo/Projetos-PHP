<?php 
    require('./modulos/autenticacao.php');
    require('./modulos/sidemenudashboard.php'); 
    require('./modulos/menuheaderdashboard.php'); 
    $error = $_GET['error'] ?? null;
    $id_plataforma = $_GET['id'] ?? null;

    $consultar_plataforma = "SELECT nome FROM plataforma WHERE id = '{$id_plataforma}'";
    $plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));
?>

<div id="content-container">
    <form action="atualizar-plataforma.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="idiom">Idioma</label>
                <input value="<?=$plataforma['nome']?>" name="plataforma" id="idiom" class="row-input" type="text">
                <input value="<?=$id_plataforma?>" name="id" type="hidden">
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
