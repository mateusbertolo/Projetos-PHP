<?php require("conexao.php"); 

$adiministrador = $_SESSION['adiministrador'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Vapor - dasboard</title>
    <div id="header-container">
        <div>Olá, <?php echo"{$adiministrador['nome']}"?></div>
        <div id="botaosair-header"><a href="./logout.php"><img src="public/images/exit.png" alt="imagem sair"> </a>
        </div> 
       
    </div>
</head>