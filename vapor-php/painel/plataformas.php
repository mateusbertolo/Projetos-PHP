
<head>
    <?php
    require('./modulos/autenticacao.php');
    require('./modulos/sidemenudashboard.php');
    require('./modulos/menuheaderdashboard.php');
    
    $queryplataformadash = " SELECT nome, id FROM plataforma ";
    $resultado_plataformas = mysqli_query($conn, $queryplataformadash);
    ?>
</head>
<body>  
    <div id="content-container">
        <div id="button-container">
            <button class="button-defalt">
                <a href="nova-plataforma.php">Nova Plataforma</a>
            </button> 
        </div>
  

    <div id="list-container">
        <table>
             <tr>   
                    <th> Plataforma </th>
                    <th> Editar </th>
                    <th> Excluir</th>
                </tr>     
                <?php while($linhasplataforma = mysqli_fetch_array($resultado_plataformas)) {  ?>      
                <tr>
                    <td><?php echo $linhasplataforma['nome']; ?></td>  
                    <td class="center"><a href="editar-plataforma.php?id=<?=$linhasplataforma['id']?>"> Editar</a></td>
                    <td class="center"><a href="excluir-plataforma.php?id=<?=$linhasplataforma['id']?>"> Excluir</a></td>
                </tr> 
                <?php }  ?>
            </table>   
        </div> 
    </div>
</body>
</html>