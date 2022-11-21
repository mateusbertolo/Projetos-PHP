<?php 
    $titulo_pagina = "Home";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <?php require('./modulos/gamelist_categoria.php')?>
            </div>
                
        </div>
    </body>
</html>