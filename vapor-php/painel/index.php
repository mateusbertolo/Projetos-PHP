<?php
$error_mensage = $_GET['error'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Vapor - Painel</title>
</head>
<body>  
    <form action="login.php" method="POST">
    <div id="content">
        <div id="arealogin">
            <div id= "imagem"><img src="./public/images/logo.png" alt="vapor"> </div>
                <div id="arealogin2">
                    <div class="labellogin">
                    <input placeholder="Insira o E-mail" type="text" name="email" id="email"></div> <br>

                    <div class="labelsenha">
                    <input placeholder="Insira a Senha" type="text"  name="senha" id="senha"></div> <br>

                    <button class="button-login">Fazer Login</button>
                </div> 
                 <?php if($error_mensage != null) { ?>
                <div class="error-message"><?=$error_mensage?></div>
                <?php } ?>
        </div>
           
           </form>
    </div>
</body>
</html>