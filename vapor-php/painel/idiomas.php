
<head>
    <?php
    require('./modulos/autenticacao.php');
    
    
    
  
    ?>
</head>
<body>
    <?php
        require('./modulos/sidemenudashboard.php');
        require('./modulos/menuheaderdashboard.php');
     
        $queryidiomadash = " SELECT nome, id FROM idioma ";
        $resultado_idiomas = mysqli_query($conn, $queryidiomadash);
     ?>
    <div id="content-container">
        <div id="button-container">
            <button class="button-defalt">
                <a href="novo-idioma.php">Novo Idioma</a>
            </button> 
        </div>
  

    <div id="list-container">
        <table>
             <tr>   
                    <th> Idioma </th>
                    <th> Editar </th>
                    <th> Excluir</th>
                </tr>     
                <?php while($linhasidioma = mysqli_fetch_array($resultado_idiomas)) {  ?>      
                <tr>
                    <td><?php echo $linhasidioma['nome']; ?></td>  
                    <td class="center"><a href="editar-idioma.php?id=<?=$linhasidioma['id']?>"> Editar</a></td>
                    <td class="center"><a href="excluir-idioma.php?id=<?=$linhasidioma['id']?>"> Excluir</a></td>
                </tr> 
                <?php }  ?>
            </table>   
        </div> 
    </div>
</body>
</html>